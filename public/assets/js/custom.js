$(document).ready(function () {

    let openModal = ()=>{
        $('#sales_data').modal('show');
    }

    $(document).on('click','.view',function(){

        let userData = [
                            {title:'name',attr:'data-name'},
                            {title:'email',attr:'data-email'},
                            {title:'teli',attr:'data-teli'},
                            {title:'joindate',attr:'data-joindate'},
                            {title:'currentRoute',attr:'data-currentRoute'},
                            {title:'comment',attr:'data-comment'},
                       ]

        userData.map((data,index)=>{
            $(`.${data['title']}`).text($(this).attr(`${data['attr']}`))
        })

        openModal();


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