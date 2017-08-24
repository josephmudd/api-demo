function getData(id){
    $.ajax({
        url: 'api.php',
        data: {id:id},
        dataType: 'json',
        success: function(data){
            $('#prizeDescription').html(data.description);
            $('#prizeAmount').html(data.qty);
        }
    });
}