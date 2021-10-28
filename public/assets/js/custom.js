$(document).ready(function () {


    $(document).on('click','.view',function(){
        
        $(".name").text($(this).attr('data-name'))
        $(".email").text($(this).attr('data-email'))
        $(".teli").text($(this).attr('data-teli'))
        $(".joindate").text($(this).attr('data-joindate'))
        $(".currentRoute").text($(this).attr('data-currentRoute'))
        $(".comment").text($(this).attr('data-comment'))


        $('#sales_data').modal('show');


    })


    // Drop sales persons

    $(document).on('click','.drop',function(){

        let id = $(this).attr('data-id')

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {


                $.ajax({
                    type: 'GET',
                    url: '/drop-sales-person',
                    data:{'id':id},
                    success: function (data) {
                        
                        console.log(data)
                        if(data=='ok')
                        {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )

                            //  if success refresh page
                            location.reload();
                        }
                    
                      
                    }
                });

             
            }
        })





    })






})    