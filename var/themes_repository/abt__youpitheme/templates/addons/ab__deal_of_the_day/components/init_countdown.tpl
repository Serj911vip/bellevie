{if $promotion.ab__dotd_awaited}
    {$to_timestamp = $promotion.from_date}
{elseif $addons.ab__deal_of_the_day.count_to == 'end_of_the_day' || !$promotion.to_date}
    {$to_timestamp = ('tomorrow midnight'|strtotime)}
{else}
    {$to_timestamp = $promotion.to_date}
{/if}

<div id="ab__deal_of_the_day_{$block.block_id}"></div>
{script src="js/addons/ab__deal_of_the_day/flipclock.min.js"}
<script type="text/javascript">
    (function (_, $) {
        $(document).ready(function() {
            var now = new Date(),
                total_seconds = {$to_timestamp - 'Z'|date} - (now.getTime()/1000 + now.getTimezoneOffset() * 60);
            _.clock_{$block.block_id} = $('#ab__deal_of_the_day_{$block.block_id}').FlipClock(total_seconds, {
                countdown: true,
                clockFace: (total_seconds > 86400) ? 'DailyCounter' : 'HourlyCounter',
                lang: {
                    'years'   : '{__('ab__dotd.counter.years')}',
                    'months'  : '{__('ab__dotd.counter.months')}',
                    'days'    : '{__('ab__dotd.counter.days')}',
                    'hours'   : '{__('ab__dotd.counter.hours')}',
                    'minutes' : '{__('ab__dotd.counter.minutes')}',
                    'seconds' : '{__('ab__dotd.counter.seconds')}'
                },
                callbacks: {
                    start: function() {
                        $(".flip-clock-divider", $(this.factory.$el)).wrap("<div class='ab-flip-clock-item'></div>");
                        var deviderWraps = $(".ab-flip-clock-item", $(this.factory.$el));
                        for (var i = 0; i < deviderWraps.length; i++) {
                            var count = 0;
                            while (!$(deviderWraps[i]).next().hasClass("ab-flip-clock-item")) {
                                var elem = $(deviderWraps[i]).next().detach();
                                $(deviderWraps[i]).append(elem);
                                if (i == deviderWraps.length-1 && ++count == 2) {
                                    $(".flip-clock-wrapper").addClass("wrapped");
                                    break;
                                }
                            }
                        }
                    }
                }
            });
        });
    })(Tygh, Tygh.$);
</script>