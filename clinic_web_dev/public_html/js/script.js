var calendar;
var Calendar = FullCalendar.Calendar;
var events = [];
$(function() {
    if (!!scheds) {
        Object.keys(scheds).map(k => {
            var row = scheds[k]
            events.push({ id: row.booking_id, title: row.user_name, start: row.start, end: row.end });
        })
    }
    var date = new Date()
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear()

    calendar = new Calendar(document.getElementById('calendar'), {
        headerToolbar: {
            left: 'prev,next today',
            right: 'dayGridMonth,dayGridWeek,list',
            center: 'title',
        },
        selectable: true,
        themeSystem: 'bootstrap',
        //Random default events
        events: events,
        eventClick: function(info) {
            var _details = $('#event-details-modal');
            var id = info.event.id
            if (!!scheds[id]) {
                _details.find('#name').text(scheds[id].user_name);
                _details.find('#doctor').text(scheds[id].doctor_name);
                _details.find('#start').text(scheds[id].sdate);
                _details.find('#end').text(scheds[id].edate);
                _details.find('#edit,#delete').attr('data-id', id);
                _details.modal('show');
            } else {
                alert("Event is undefined");
            }
        },
        editable: true
    });

    calendar.render();

    // Form reset listener
    $('#schedule-form').on('reset', function() {
        $(this).find('input:hidden').val('')
        $(this).find('input:visible').first().focus()
    })

    // Edit Button
    $('#edit').click(function() {
        var id = $(this).attr('data-id')
        if (!!scheds[id]) {
            var _form = $('#schedule-form-admin')
            console.log(String(scheds[id].start_datetime), String(scheds[id].start_datetime).replace(" ", "\\t"))
            _form.find('[name="id"]').val(id)
            _form.find('[name="userName"]').val(scheds[id].user_name)
            _form.find('[name="sex"]').val(scheds[id].user_gender)
            _form.find('[name="email"]').val(scheds[id].user_email)
            _form.find('[name="phoneNo"]').val(scheds[id].user_phoneNo)
            _form.find('[name="start_datetime"]').val(String(scheds[id].start).replace(" ", "T"))
            _form.find('[name="end_datetime"]').val(String(scheds[id].end).replace(" ", "T"))
            _form.find('[name="doctorName"]').val(scheds[id].doctor_name)
            _form.find('[name="status"]').val(scheds[id].status)
            $('#event-details-modal').modal('hide')
            _form.find('[name="title"]').focus()
        } else {
            alert("Event is undefined");
        }
    })

    // Delete Button / Deleting an Event
    $('#delete').click(function() {
        var id = $(this).attr('data-id')
        if (!!scheds[id]) {
            var _conf = confirm("Are you sure to delete this scheduled event?");
            if (_conf === true) {
                location.href = "./delete_schedule.php?id=" + id;
            }
        } else {
            alert("Event is undefined");
        }
    })
})