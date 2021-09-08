<div class="{{$class}}">
    <livewire:chart-title />
    <div wire:ignore id="chart" style="height: 400px;"></div>
    <livewire:chart-week-settings />
</div>

{{-- @if($chart) --}}
    @push('scripts')
        {{-- {!! $chart->script() !!} --}}

        <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
        <!-- Chartisan -->
        <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
        <script>
          var url = "@chart('case_chart')";
          var showSchool = 'all';
          var showWeek = false;
          var showWeeks = 4;
          var chart = new Chartisan({
            el: '#chart',
            url: "@chart('case_chart')" + '?school=' + showSchool,
            hooks: new ChartisanHooks()
                .responsive()
                .colors(['#34D399', '#60A5FA', '#A78BFA', '#FBBF24'])
                .borderColors(['#34D399', '#60A5FA', '#A78BFA', '#FBBF24'])
                .datasets([{ type: 'line', fill: false }]),
          });

          Livewire.on('FilterChange', (week, school) => {
           showSchool = school;
           showWeek = week;
           url = "@chart('case_chart')" + '?date=' + showWeek + '&school=' + showSchool + '&weeks=' + showWeeks;
           chart.update({url:url});
          });

          Livewire.on('SetWeeks', (weeks) => {
            showWeeks = weeks;
           if (showWeek) {
            url = "@chart('case_chart')" + '?date=' + showWeek + '&school=' + showSchool + '&weeks=' + showWeeks;
           } else {
            url = "@chart('case_chart')" + '?school=' + showSchool + '&weeks=' + showWeeks;
           }
           chart.update({url:url});
          });
        </script>
    @endpush
{{-- @endif --}}
