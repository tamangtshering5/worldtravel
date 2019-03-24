$(document).ready(function () {

    function load_unseen_notification(notification) {
        var sendData = {
            notification:notification,
            _token: token
        };
        $.ajax({
            url: url + '/dashboard/tourbooking-message',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                $('#menu1').html(data.notifications);
                if (data.count > 0) {
                    $('.unseen').html(data.count);
                }
            }
        });
    };

    load_unseen_notification();

    $(document).on('click', '.dropdown-toggle', function () {
        $('.unseen').html('');
        setInterval(function () {
            load_unseen_notification('yes');
        },10000);

    });
});


// $(document).ready(function () {
// //notification
//     function load_unseen_notification() {
//         var sendData = {
//             _token: token
//         };
//         $.ajax({
//             url: url + '/dashboard/tourbooking-message',
//             method: 'POST',
//             data: sendData,
//             success: function (data) {
//                 console.log(data);
//                 $('#menu1').html(data.data);
//                 if (data.count > 0) {
//                     $('.unseen').html(data.count);
//                 }
//             }
//         });
//     };
//     load_unseen_notification();
//
// });


