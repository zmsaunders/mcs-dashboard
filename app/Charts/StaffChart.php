<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Report;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class StaffChart extends BaseChart
{
    public $labels = [];
    public $positive = [];
    public $quarantine = [];
    public $endDate;
    public $school;

    public $weeks = 6;

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

        $this->weeks = $request->get('weeks') ?? 6;

        $this->gatherData();

        return Chartisan::build()
            ->labels(array_reverse($this->labels))
            ->dataset('Staff Positive', array_reverse($this->positive))
            ->dataset('Staff Quarantine', array_reverse($this->quarantine));
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
            $this->positive[$k] = 0;
            $this->quarantine[$k] = 0;

            foreach($week as $case) {
                $this->positive[$k] += $case->staff_positive;
                $this->quarantine[$k] += $case->staff_quarantine;
            }
        }
    }
}
