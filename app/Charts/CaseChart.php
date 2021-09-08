<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Report;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class CaseChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public $labels = [];
    public $stup = [];
    public $stuq = [];
    public $stap = [];
    public $staq = [];
    public $endDate;
    public $school;

    public $weeks = 4;

    public function handler(Request $request): Chartisan
    {
        if ($request->get('date')) {
            $this->endDate = $request->get('date');
        } else {
            $this->endDate = date('Y-m-d', strtotime('Previous Monday'));

            if (! Report::where('week', $this->endDate)->first()) {
                $this->endDate = date('Y-m-d', strtotime('Previous Week'));
            }
        }

        $this->school = $request->get('school') ?? 'all';

        $this->weeks = $request->get('weeks') ?? 4;

        $this->gatherData();

        return Chartisan::build()
            ->labels(array_reverse($this->labels))
            ->dataset('Students Positive', array_reverse($this->stup))
            ->dataset('Staff Positive', array_reverse($this->stap))
            ->dataset('Students Quarantined', array_reverse($this->stuq))
            ->dataset('Staff Quarantined', array_reverse($this->staq));
    }

    public function gatherData()
    {
        // Build our weeks:
        $weeks = [];

        for ($i = 0; $i < $this->weeks ; $i++) {
            $week = date('Y-m-d', strtotime('-' . $i . ' weeks', strtotime($this->endDate)));
            $this->labels[] =  date('m / d', strtotime($week));

            if ($this->school == 'all') {
                $weeks[$i] = Report::with('school')->where('week', $week)->get()->sortBy('school.name');
            } else {
                $weeks[$i] = Report::with('school')->where('week', $week)->where('school_id', $this->school)->get()->sortBy('school.name');
            }
        }

        foreach($weeks as $k => $week) {
            $this->stup[$k] = 0;
            $this->stap[$k] = 0;
            $this->stuq[$k] = 0;
            $this->staq[$k] = 0;

            foreach($week as $case) {
                $this->stup[$k] += $case->student_positive;
                $this->stap[$k] += $case->staff_positive;
                $this->stuq[$k] += $case->student_quarantine;
                $this->staq[$k] += $case->staff_quarantine;
            }
        }
    }
}
