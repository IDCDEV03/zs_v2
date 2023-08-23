<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ID Drives</title>

    @include('layouts.header')
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body class="layout-light top-menu">

    <div class="mobile-author-actions"></div>

    <main class="main-content">
        @include('layouts.head')

        <div class="contents">
           <div class="container-fluid p-3">

            @foreach ($branch_detail as $row)  

            <div class="col-12">
                <div class="grid-area mb-25">
                   <div class="card">
                      <div class="card-header">
                         <h4>สาขา{{$row->branch_name}} จังหวัด{{$row->branch_province}}</h4>
                      </div>
                      <div class="card-body">
                         <div class="row">                      
                               <div class="container-fluid">
                                  
                                  <div class="row">
                                     <div class="col-sm-6">
                                        <ul>
                                            <li>
                                                <i class="las la-map-marked"></i>
                                                {{$row->branch_address}}
                                            </li>
                                            <li>
                                                <i class="lab la-facebook"></i> 
                                                <a target="_blank" href="{{$row->branch_fb}}">{{$row->branch_fb}}</a>                            
                                            </li>
                                            <li>
                                                <i class="las la-phone"></i>
                                                {{$row->branch_phone}}
                                            </li>
                                          
                                            @if ($row->branch_email != "")
                                             <li>
                                                        <i class="las la-envelope-open-text"></i>
                                                        {{$row->branch_email}}
                                              </li>
                                            @endif
                    
                                            @if ($row->branch_other != "")
                                             <li>
                                                <i class="las la-thumbtack"></i>
                                                {{$row->branch_other}}
                                             </li>                            
                                            @endif  
                                        </ul>
                                     </div>
                                     <div class="col-sm-6">
                                        {!! $row->branch_gps !!}
                                     </div>
                                  </div>
                               </div>
                               @endforeach     


                         </div>
                      </div>
                   </div>
                </div>
             </div>
      
                <div class="card">
                    <div class="card-body">
                        <div class="bd-example01-row">
                        <div class="bd-example">
                            <div class="container-fluid">
                                <div class="row">
@foreach ($branch_type as $item)
    

                                    <div class="col-md-4"> 
                                        <a href="{{route('admin.dl_type', ['id' => $item->dl_type])}}">
                                            <img class="img-fluid" src="{{asset($item->dl_cover)}}" alt="img">
                                        </a>
                                    </div>
 @endforeach
                                  


                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>



    <!-----------------------------footer------------------------>
    @include('layouts.footer')   
    </main>
  
    @include('layouts.script')
 </body>

</html>
