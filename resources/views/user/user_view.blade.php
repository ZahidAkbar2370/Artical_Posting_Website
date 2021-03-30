@extends('user/user_layout')
@section('contents')
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top:15px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="slider1.jpg" alt="Los Angeles" style="width:100%;height:400px">
      </div>

      <div class="item">
        <img src="slider2.jpg" alt="Chicago" style="width:100%;height:400px">
      </div>
    
      <div class="item">
        <img src="slider3.jpg" alt="New york" style="width:100%;height:400px">
      </div>
    </div>

    <!--  -->
  

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<center><h1 style="margin-top: 50px;">Welcome To My Artical</h1></center>    
<br>
<p style="margin-left:110px;margin-right:110px;text-align: justify;"> kjsdfhdsa jldkf sdajjflk sdklfj asdlkf ajsdflkasdj fklasdjf kdaslfj asdklf jasdkf jaksl fjdaskfj askdlfj lkasd fjklasd fjlkas djfk dsjkf adsjlkf jadsklfjdsklf jasdlk fjdaslkfj sdalk fjlkdsj flkdsfjdslkf jdlskfj asdlkjfdaslkjflkasd;jfdskfjdsk fjsdkfdsk dsjak sjklfj dskfj dslkfjadsflk ds</p>

<h1 class="text-center" style="margin-top:50px;">Our Articals</h1>
    
    <div class="container">
     <div class="row">
          <div class="col-md-4">
             <img src="" width="300" height="300">

             <h4>kjdflkjsd lkdjasfjsdaklklasdjf ldjfsksdafj</h4>

             <p style="margin-right: 50px">dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf</p>

          </div>
           <div class="col-md-4">
             <img src="" width="300" height="300">

             <h4>kjdflkjsd lkdjasfjsdaklklasdjf ldjfsksdafj</h4>

             <p style="margin-right: 50px">dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf</p>

          </div>
           <div class="col-md-4">
             <img src="" width="300" height="300">
             <h4>kjdflkjsd lkdjasfjsdaklklasdjf ldjfsksdafj</h4>

             <p style="margin-right: 50px">dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf dfhjkdshf sdkjfhsdjkfhsdk fhskjf hksjdhfskjfhkjsadhfksj hfsjkadh fkasj fhksjfhaskdfh sjkdfhskdjh fkjsdhf kjsdh fjksd hfkjshfjksdhfjsdh fksdh fkjsdhfkjsdhfkjsdhfkjsdhf</p>
             
          </div>
      </div>


    </div>


</body>
<br><br>

@endsection


