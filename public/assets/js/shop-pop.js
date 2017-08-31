$(document).on('click', '.menos', function(e) {
        let $input = $(this).siblings('.Qty-input'),
            val = parseInt($input.val()),
            max = parseInt($input.attr('max')),
            step = parseInt($input.attr('step'));

        let temp = val + step;
        $input.val(temp <= max ? temp : max);
        console.log(temp);
    });
    $(document).on('click', '.mas', function(e) {
        let $input = $(this).siblings('.Qty-input'),
            val = parseInt($input.val()),
            min = parseInt($input.attr('min')),
            step = parseInt($input.attr('step'));

        let temp = val - step;
        $input.val(temp >= min ? temp : min);
      
        console.log(temp);
    });
