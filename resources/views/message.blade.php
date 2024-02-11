<html>
   <head>
      <title>Ajax Example</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
      
     
   </head>
   
   <body>

        <p><b>Start typing a name in the input field below:</b></p>
        <form action="">
            <label for="fname">First name:</label>
            <input type="text" id="searchData" name="searchData">
        </form>
        <br>
        <table class="table">
            <tr>
                <th>product_id</th>
                <th>storey_id</th>
                <th>design</th>
                <th>description</th>
                <th>lot_area</th>
                <th>image_3d</th>
                <th>floor_plan_image</th>
                <th>interior_image</th>
                <th>title</th>
            </tr>
            <tbody class="tbodyData">

            </tbody>
        </table>
    </body>

    <script>
        $(document).ready(function(){

            $('#searchData').keyup(function(){
                const searchId = $(this).val()

                $.ajax({
                    url: '/search/' + searchId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){

                        $('.tableData').empty();

                       for (let i = 0; i < data.length; i++) {
                            const tdData = `
                                <tr>
                                    <td>${data[i].product_id}</td>
                                    <td>${data[i].storey_id}</td>
                                    <td>${data[i].design}</td>
                                    <td>${data[i].description}</td>
                                    <td>${data[i].lot_area}</td>
                                    <td>${data[i].image_3d}</td>
                                    <td>${data[i].floor_plan_image}</td>
                                    <td>${data[i].interior_image}</td>
                                    <td>${data[i].title}</td>
                                </tr>`

                            $('.tbodyData').append(tdData);
                        }
                    },
                    error: function(error){
                        console.log(error);
                    }
                })
            })
        })


    </script>

</html>