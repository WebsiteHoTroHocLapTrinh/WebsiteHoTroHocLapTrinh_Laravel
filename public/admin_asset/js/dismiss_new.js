$(function() {
    $(document).on("click", 'table > tbody > tr', function() {
       /* if (this.checked) {
            $(this).attr('checked', 'checked');
        } else {
            $(this).removeAttr('checked');
        }*/
        var id = $(this).closest('tr').find('td').first().children('div.id').html();
        // alert(id);
        // alert($(this).closest('table').attr('id'));
        switch ($(this).closest('table').attr('id')) { // 1: answer, 2:documentation, 3:permission, 4:question, 5:subject, 6:tag, 7:user
            case "dataTables-list-answer":
                var type = 1;
                break;
            case "dataTables-list-documentation":
                var type = 2;
                break;
            case "dataTables-list-permission":
                var type = 3;
                break;
            case "dataTables-list-question":
                var type = 4;
                break;
            case "dataTables-list-subject":
                var type = 5;
                break;
            case "dataTables-list-tag":
                var type = 6;
                break;
            case "dataTables-list-user":
                var type = 7;
                break;
            case "dataTables-list-comment":
                var type = 8;
                break;
            default:
                var type = 9;
                break;
        }
        // alert(type);

        $.get("ajax/dismissNew/" + type + "/" + id, function() {

        });
    });
});