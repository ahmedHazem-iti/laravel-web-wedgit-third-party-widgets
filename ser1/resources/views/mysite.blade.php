{{--
<style>
    .div1{
        width: 300px;
        height: 300px;
        background-color: blue;
        text-align: center;
    }
    .req3rd{
        width: 100px;
        height: 100px;
        background-color: violet;
        margin-top: 100px
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="div1">
<button class="req3rd">Third Party Request</button>
</div>
<div id="targetTable"></div>


<script>
    $(document).on('click', '.req3rd', function (e) {
        console.log(e);

         $.ajax({
            type: 'get',
            url: "http://localhost:8001/api/getwidjet",
            data: {

            },
            success: function (data) {
console.log(data);

                    $('.div1').empty().html(data.template.main);


            }, error: function (reject) {
                console.log(reject);

            }
        });
    });
</script> --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<style type="text/css">
    body {
        background-image: url('https://images.unsplash.com/photo-1581456495146-65a71b2c8e52?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=633&q=80');
        background-size: 100% 100% ;

           }
           #content{
                    width: 80%;
                    height: 70vh;
                    margin: 30px auto;
                    padding: 20px;
                    background:rgba(0,0,0,.6);
                    border-radius: 30px;
                    border:3px solid white ;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-content: center
           }

                .sendarea{
                    display: inline-block;
                    position: relative;
                    top: 10px;

                }
        h3{
            color: antiquewhite;
        }

        h1{
            color: white;
        }

    </style>
    </head>

    <body>
        @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
        @endif



    <div id="content" class="text-center">
         <h1>Hello istudy!</h1>

         <br>
         <h3 class="white">
            when clicking on button send .thats send data to the server which contact to 3rd party and retreive widget then show to client and this widget add additional data and emmbed it in form

         </h3>


            <br>
            <div id="targetTable">

                <form class="form-inline md-form mr-auto mb-4 text-center px-5" style="margin:  10px auto;          " >
                    <input  style=" background:rgba(0,0,0,.6)" class=" forminput p-4 form-control mr-sm-2" type="text" placeholder="Send data to 3rd party" aria-label="Search">
                    <button style=" background:rgba(0,0,0,.6)" class=" p-3 req3rd btn btn-info btn-rounded btn-sm my-0" type="submit">Send</button>
                </form>
            </div>

            <div class="div1">
                  {{-- <button class="btn btn-danger">here</button> --}}

            </div>


    </div>

    <script>
        $(document).on('click', '.req3rd', function (e) {
            e.preventDefault();
            console.log(e);
            var variable = $('.forminput').val()
             $.ajax({
                type: 'post',
                url: "http://localhost:8000/api/call3rd",
                data: {
                        input :variable
                },
                success: function (data) {
                    console.log(data);

                        $('.div1').empty().html(data.template.main);


                }, error: function (reject) {
                    console.log(reject);

                }
            });
        });
    </script>


{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

