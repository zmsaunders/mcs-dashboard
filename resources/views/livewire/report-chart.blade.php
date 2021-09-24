<div class="{{$class}}">
    @livewire('chart-title', ['preface' => $title])
    <div wire:ignore id="{{$chartid}}" class="h-64 lg:h-96"></div>
    @livewire('chart-week-settings', ['chartid' => $chartid])
    {{--  --}}
</div>

{{-- @if($chart) --}}
    @push('scripts')
        {{-- {!! $chart->script() !!} --}}
        <script>
          var url = "@chart($sourcechart)";
          var showSchool = 'all';
          var showWeek = false;
          var showWeeks = 4;
          var {{$chartid}} = new Chartisan({
            el: '#{{$chartid}}',
            url: "@chart($sourcechart)" + '?school=' + showSchool,
            hooks: new ChartisanHooks()
                .responsive()
                .colors({!!$colors!!})
                .borderColors({!!$colors!!})
                .datasets([{ type: 'line', fill: false }]),
          });

          Livewire.on('FilterChange', (week, school) => {
           showSchool = school;
           showWeek = week;
           url = "@chart($sourcechart)" + '?date=' + showWeek + '&school=' + showSchool + '&weeks=' + showWeeks;
           {{$chartid}}.update({url:url});
          });


          Livewire.on('SetWeeks-{{$chartid}}', (weeks) => {
            showWeeks = weeks;
           if (showWeek) {
            url = "@chart($sourcechart)" + '?date=' + showWeek + '&school=' + showSchool + '&weeks=' + showWeeks;
           } else {
            url = "@chart($sourcechart)" + '?school=' + showSchool + '&weeks=' + showWeeks;
           }
           {{$chartid}}.update({url:url});
          });
        </script>
    @endpush
{{-- @endif --}}
