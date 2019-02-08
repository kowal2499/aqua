
(function() {

    "use strict"
    var animSpeed = 200;

    function createHeader() {

        var header = document.createElement("div");
        header.className = "calendar-header";
        var headerMonth = document.createElement("div");
        headerMonth.className = "month";
        headerMonth.innerHTML = months[userMonth];
        var headerYear = document.createElement("div");
        headerYear.className = "year";
        headerYear.innerHTML = userYear;

        var arrowRight = document.createElement('i');
        arrowRight.className = "fa fa-angle-right";
        arrowRight.id = "nextMonth";

        var arrowLeft = document.createElement('i');
        arrowLeft.className = "fa fa-angle-left";
        arrowLeft.id = "prevMonth";


        header.appendChild(headerMonth);
        header.appendChild(headerYear);
        header.appendChild(arrowRight);
        header.appendChild(arrowLeft);

        return header;
    }


    function createTBody(month, year) {

        var tableBody = document.createElement("tbody");
        var d = new Date(year, month, 1);
        var initialDay = d.getDay() - 1;
        if (initialDay < 0) initialDay = 6;

        var d = new Date(year, month+1, 0);
        var daysInMonth = d.getDate();
                
        var dayCounter = 1;

        // add last days of previous month
        var tr = document.createElement('tr');
        for (var day=0; day < initialDay; day++) {
            tr.appendChild(document.createElement('td'));
        }

        // add regular days
        var dojob = true;
        while (dojob) {
            
            for (var day=initialDay; day < 7; day++) {
                
                var strDate = year + "-" + (month + 1) + "-" + dayCounter;
                var td = document.createElement('td');
                var myClass = "available";

                if (year in reservations) {
                    if (month+1 in reservations[year]) {
                        if (reservations[year][month+1].indexOf(dayCounter.toString()) > -1) {
                            myClass = "rented";
                        }
                    }
                }

                td.className = myClass;
                td.innerHTML = dayCounter++
                tr.appendChild(td);
                if (dayCounter > daysInMonth) {
                    dojob = false;
                    break;
                }
            }
            tableBody.appendChild(tr);
            var tr = document.createElement('tr');
            initialDay = 0;
        }

        // add first days of next month 
         var d = new Date(year, month, daysInMonth);
         var lastDayinMonth = d.getDay();
         if (lastDayinMonth==0) lastDayinMonth = 7;

         for (var day = lastDayinMonth; day < 7; day++) {
             tableBody.lastChild.appendChild(document.createElement('td'));
         }      

        return tableBody;
    }

    var switchMonth = function(direction) {

        // calculate new year
        if (userMonth == 11 && direction == 1) {
            userMonth = 0;
            userYear++;
        } else if (userMonth == 0 && direction == -1) {
            userMonth = 11;
            userYear--;
        } else {
            userMonth = userMonth + direction;
        }

        var divMonth = jQuery('#erla-calendar .month');
        var divYear =  jQuery('#erla-calendar .year');
        
        // output year
        divYear.text(userYear);

        // output month & animate
        divMonth.animate(
            {opacity: 0, left: -100 * direction},
            animSpeed,
            function() {
                divMonth.text(months[userMonth]);
                divMonth.css('left', 100 * direction);
                divMonth.animate({opacity: 1, left: 0}, animSpeed)
            }
        )
        
        // output table body
        var tbody = jQuery('#erla-calendar tbody');
        
        tbody.fadeOut(animSpeed, function() {
                
            jQuery(this).remove();
            // makeAJAXcall();

            var tbody = createTBody(userMonth, userYear);

            jQuery(tbody).css("display", "none");
            table.appendChild(tbody);
            jQuery(tbody).fadeIn(animSpeed);
        });
        
    }

    function addDate(str) {
        // get rid of leading zeros
        var dateArray = str.split("-");
        var year = dateArray[0];
        var month = dateArray[1];
        var day = dateArray[2];

        var date = new Date(year, month, day);
        
        // create key/value pairs of dates
        var yearKey = "" + date.getFullYear();

        if (!(yearKey in reservations)) {
            reservations[yearKey] = {}
        }

        var monthKey = "" + date.getMonth();
        if (!(monthKey in reservations[yearKey])) {
            reservations[yearKey][monthKey] = []
        }

        var dateStr = "" + date.getDate();
        reservations[yearKey][monthKey].push(dateStr)
    }


    // ###################
    
    var calendarDIV = document.getElementById('erla-calendar');

    if (!calendarDIV) {
        return
    }

    var currentDate = new Date();
    var userYear = currentDate.getFullYear();
    var userMonth = currentDate.getMonth();

    // get months & days names from hidden input (loacalization feature)
    var monthsBackend = document.getElementById("calendar-month-names").value.split(',')
    var months = []
    for (var i=0; i<monthsBackend.length; i++) {
        months.push(monthsBackend[i].trim())
    }

    var daysBackend = document.getElementById("calendar-day-names").value.split(',')
    var dayNames = []
    for (var i=0; i<daysBackend.length; i++) {
        dayNames.push(daysBackend[i].trim())
    }
    
    // get reservations

    var input = document.getElementById("calendar-dates");
    

    // #################### here we store reservations
    var reservations = {};
    // ####################

    var tmpArray = input.value.split(',');
    
    for (var i=0; i<tmpArray.length; i++) {
        addDate(tmpArray[i].trim());
    }

    // create calendar

    var table = document.createElement('table');
    table.className = "table";


    var tableHead = document.createElement('thead');
    var tr = document.createElement('tr');

    // header
    dayNames.forEach(function(item) {
            var th = document.createElement('th');
            th.innerHTML = item;
            tr.appendChild(th)
    });

    tableHead.appendChild(tr);
    table.appendChild(tableHead);
    table.appendChild(createTBody(userMonth, userYear));

    calendarDIV.appendChild(createHeader());
    calendarDIV.appendChild(table);

    document.getElementById("nextMonth").addEventListener("click", function() { switchMonth(1); });
    document.getElementById("prevMonth").addEventListener("click", function() { switchMonth(-1); });

}) ();