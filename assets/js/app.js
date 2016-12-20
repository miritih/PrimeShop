/**
 * Created by eric on 8/26/15.
 */
$(function () {

    /*fixed top*/
    var navoffeset = $(".navbar").offset().top;
    $(window).scroll(function () {
        var scrollpos = $(window).scrollTop();
        if (scrollpos >= navoffeset) {
            $(".navbar").addClass("fixed");
        } else {
            $(".navbar").removeClass("fixed");
        }
    });
});
/*modal login positioning*/
$('#login_modal').on('show.bs.modal', function (e) {
    var height=$(window).height()/2-200;
    $(this).css('margin-top',height);
});

$('#login_li').on('click', function () {
    $('#login_modal').modal({
        keyboard: true,
        backdrop:'static'
    });
});
/*hide tutorials after 10 sec*/
setInterval(function () {
    $("#tutorial").alert('close')
},10000);
$('.count').hide();
    /*/fixed top*/
/*
function clock() {
       var clock = $('#clock');
       if (!clock.length) {
         return;
       }
       // Date variables.
       var date_obj = new Date();
       var hour = date_obj.getHours();
       var minute = date_obj.getMinutes();
       var day = date_obj.getDate();
       var year = date_obj.getFullYear();
       var suffix = 'AM';
       // Array for weekday.
       var weekday = [
         'Sunday',
         'Monday',
         'Tuesday',
         'Wednesday',
         'Thursday',
         'Friday',
         'Saturday'
       ];

       // Array for month.
       var month = [
         'January',
         'February',
         'March',
         'April',
         'May',
         'June',
         'July',
         'August',
         'September',
         'October',
         'November',
         'December'
       ];

       // Assign weekday, month, date, year.
       weekday = weekday[date_obj.getDay()];
       month = month[date_obj.getMonth()];

       // AM or PM?
       if (hour >= 12) {
         suffix = 'PM';
       }

       // Convert to 12-hour.
       if (hour > 12) {
         hour = hour - 12;
       }
       else if (hour === 0) {
         // Display 12:XX instead of 0:XX.
         hour = 12;
       }

       // Leading zero, if needed.
       if (minute < 10) {
         minute = '0' + minute;
       }

       // Build two HTML strings.
       var clock_time = weekday + ' ' + hour + ':' + minute + ' ' + suffix;
       var clock_date =weekday + ','+ month + ' ' + day + ', ' + year;

       // Shove in the HTML.
       clock.html(clock_date).attr('title', clock_time);
      clock.tooltip();
     }*/
