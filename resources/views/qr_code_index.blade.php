<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"  content="Generate a QR code image to point to a website URL"  />
    <meta name="keywords" content="qr code, qr codes, qrcodes, create qr code, qr code generator, create qrcodes, make a qr code, online qr code"  />
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link  href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap"  rel="stylesheet" />
    <link rel="stylesheet" href=" {{asset('assets/css/main/app.css')}} ">


    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"
    integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
  <script src="{{asset('assets/js/script.js')}}" defer></script>
 
  </head>
  <body>
    



    <div class="container">
        <div class="card mt-5 ">
            <div class="card-body">
                <h1>QR Code</h1>   
            </div>
        </div>


        <form id="generate-form" class="mt-4">
            <input id="url" type="url" placeholder="Enter a URL" class="form-control form-lg"   />
            <select class="  form-control mt-3"   name="size" id="size">
              <option value="100">100x100</option>
              <option value="200">200x200</option>
              <option value="400" selected>400x400</option>
              <option value="500">500x500</option>
              <option value="600">600x600</option>
              <option value="700">700x700</option>
            </select>
            <button  class="btn btn-primary mt-3 " type="submit"  > Generate QR Code </button>
          </form>


          <div class="w-full md:w-1/3 self-center"> <img  class="w-1/2 m-auto mb-10 md:w-full"  src="img/qr-code.svg"   alt=""  />  </div>
          <div id="generated" class= "m-3 p-3 d-flex justify-content-center " style="text-align:center;" >
            <div id="qrcode" class="m-3 p-3 text-center" style = "border:10px solid black; text-align:center;" ></div>
          </div>



























    </div>
  </body>
  </html>




