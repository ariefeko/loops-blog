<script>
    $(document).ready(function() {
        var datatablesOptions = {
            "columns": [
                { bVisible : false }, // hide id pada list
                null,
                null,
                null,
                null,
                { // edit
                    mRender: function (data, type, row) {
                        return '<a class="btn btn-primary" href=/post/edit/'+row[0]+'>Edit</a>'
                    }
                },
                { // delete
                    mRender: function (data, type, row) {
                        return '<a class="btn btn-danger" href=/post/delete/'+row[0]+'>Delete</a>'
                    }
                },              
             ]
        };

        $('.datatable').DataTable(datatablesOptions);

        
    } );
</script>