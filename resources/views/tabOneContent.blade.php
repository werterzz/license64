@extends('layouts.header')

@section('title', $exam['name'] )

@section('content')
<div class="space"></div>
    <div class="tabTwoImageCard">
    <form  id="examForm" method="post" action="{{ $_SERVER['REQUEST_URI'] }}">
    @csrf <!-- {{ csrf_field() }} -->
        @foreach ($exam['exam'] as $index=>$test)
            <div class="examCard">
            <div>
                {{ $index+1 }}. {{ $test['name'] }}
            </div>
            @if (isset($test['image']))
              <div class="questionImage"><img src="/storage/exam/image/{{ $test['image'] }}" alt=""></div>
            @endif

<div class="oldChoice">
    <label class="contain">
    @if (isset($test['type']))
      <div class="ChoiceImage"><?php
echo '<img src="/storage/exam/image/', urlencode($test['choice'][0]) ,'" alt="">';
?></div>
    @endif
    <input type="radio" id="{{ $test['name'] }}0" name="test{{ $index+1 }}" value="0 {{ $test['correct'] }}">
    <span class="checkmark"></span>
    </label>
    @if (!(isset($test['type'])))
      <div class="textChoice">{{ $test['choice'][0] }}</div>
    @endif
</div>
<div class="evenChoice">
    <label class="contain">
    @if (isset($test['type']))
      <div class="ChoiceImage"><?php
echo '<img src="/storage/exam/image/', urlencode($test['choice'][1]) ,'" alt="">';
?></div>
    @endif
    <input type="radio" id="{{ $test['name'] }}1" name="test{{ $index+1 }}"  value="1 {{ $test['correct'] }}">
    <span class="checkmark"></span>
    </label>
    @if (!(isset($test['type'])))
      <div class="textChoice">{{ $test['choice'][1] }}</div>
    @endif
</div>
<div class="oldChoice">
    <label class="contain">
    @if (isset($test['type']))
      <div class="ChoiceImage"><?php
echo '<img src="/storage/exam/image/', urlencode($test['choice'][2]) ,'" alt="">';
?></div>
    @endif
    <input type="radio" id="{{ $test['name'] }}2" name="test{{ $index+1 }}"  value="2 {{ $test['correct'] }}">
    <span class="checkmark"></span>
    </label>
    @if (!(isset($test['type'])))
      <div class="textChoice">{{ $test['choice'][2] }}</div>
    @endif
</div>
<div class="evenChoice">
    <label class="contain">
    @if (isset($test['type']))
      <div class="ChoiceImage"><?php
echo '<img src="/storage/exam/image/', urlencode($test['choice'][3]) ,'" alt="">';
?></div>
    @endif
    <input type="radio" id="{{ $test['name'] }}3" name="test{{ $index+1 }}" value="3 {{ $test['correct'] }}">
    <span class="checkmark"></span>
    </label>
    @if (!(isset($test['type'])))
      <div class="textChoice">{{ $test['choice'][3] }}</div>
    @endif
    
</div>


            </div>
        @endforeach
        <input type="hidden" name="exam" value="{{ json_encode($exam) }}">
        <button class="fixed submitBtn" type="submit">
        <ion-icon name="checkmark-outline"></ion-icon>
        </button>
        </form>
    </div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="modalBtn" hidden data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
@if (isset($score))
<div class="modal fade justify-content-center" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered justify-content-center" id="checkModal">
    <div class="modal-content justify-content-center">
      <div class="modal-body justify-content-center">
      <div><ion-icon name="{{ $icon }}" class="result-icon"></ion-icon></div>
      
      <strong>คะแนนของคุณคือ {{ $score }}/{{ $totalScore }}</strong>
      <p>{{ $resultTxt }}</p>
      <button type="button" data-bs-dismiss="modal" id="ansBtn"><ion-icon slot="start"  name="checkmark-outline"></ion-icon>เฉลย</button>
      <button type="button"  id="againBtn"><ion-icon slot="start" name="refresh-outline"></ion-icon>ทำอีกครั้ง</button>
      <!-- <div><button type="button"  id="shareBtn"><ion-icon slot="start" name="share-social-outline"></ion-icon>SHARE</button></div> -->
      <div><button type="button" id="closeBtn" data-bs-dismiss="modal"><ion-icon slot="start" name="close-outline"></ion-icon>ปิด</button></div>
      </div>
    </div>
  </div>
</div>
@endif

<script>
    var isAnswer = <?php echo  $isAnswer; ?>; // Don't forget the extra semicolon!
    console.log(isAnswer);
    if (isAnswer == true) 
    {
      document.getElementById("modalBtn").click();
      window.addEventListener('click', function(e){   
  if (document.getElementById('checkModal').contains(e.target)){
    // Clicked in box
  } else{
    // Clicked outside the box
    window.location.href = "{{ $_SERVER['REQUEST_URI'] }}";
  }
});
      
    }
</script>

<script src="{{ asset('js/tabOneForm.js') }}"></script>



    <style>

.space {
            width: 100%;
            height: 5vh;
        }

      .ChoiceImage {
        width: 20%;
        height: 20%;
        background-color: rgba(255, 0, 0, 0.0) !important;
      }

      .textChoice {
        margin-left: 8vmin;
      }

          #checkModal {
            width: 32vmax;
            margin: auto;
          }

          .questionImage {
            width: 20%;
            margin: 0 auto;
            margin-top: 1.6vh;
          }

          #ansBtn, #againBtn, #closeBtn {
          text-decoration: none;
          background-color: #c14ad2;
          border: none;
          color: #fff;
          outline: none;
        }

        #shareBtn {
          text-decoration: none;
          border: none;
          color: #c14ad2;
          background-color: #fff;
          border: 2px solid #c14ad2;
          outline: none;
        }

        #shareBtn, #closeBtn {
          margin-top: 2vh;
        }

        .fixed {
          position: fixed;
          bottom: 5vh;
          right: 5vw;
          width: 30px;
          height: 30px;
        }
        .modal-body {
          text-align: center;
          color: #8c8c8c;
        }
        .result-icon {
          color: #8c8c8c;
          font-size: 60px;
        }

        .submitBtn {
          text-decoration: none;
          border: none;
          border-radius: 100%;
          color: #c14ad2;
          outline:none !important;
          border: none !important;
          box-shadow: none !important;
        }

        .examCard {
            margin: auto;
            margin-top: 5%;
            width: 60%;
            border: 3px solid #c14ad2;
            margin-bottom: 5%;


        }

        .examCard div:nth-child(1) {
            padding: 8px;
            background-color: #c14ad2;
            color: #fff;
        }

        .examCard input[type=radio] {
            /* position: absolute; */
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
            margin-left: 1.5vw;
        }

        .radioBtn {
            /* position: absolute;
  top: 0;
  left: 0; */
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50px;
        }

        .examCard label {
            padding-left: 2vw;
        }

        .oldChoice {
            padding: 8px;
            background-color: rgba(255,255,255,0.15);
            /* position: relative; */
        }
        .evenChoice {
            padding: 8px;
            background-color: rgba(255,255,255,0.25);
            /* position: relative; */
        } 

        .tabTwoImageCard img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10%;
        }

        .contain {
  display: block;
  position: relative;
  margin-right: 5vh;
  padding-left: 35px;
  /* margin-bottom: 12px; */
  cursor: pointer;
  /* font-size: 22px; */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.contain input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 5px;
  left: 5px;
  height: 15px;
  width: 15px;
  background-color: rgba(201, 76, 76, 0);
  border-radius: 50%;
  border: 2px solid #fff;
}

/* On mouse-over, add a grey background color */
.contain:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.contain input:checked ~ .checkmark {
  background-color: rgba(201, 76, 76, 0);
  border: 2px solid #c14ad2;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.contain input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.contain .checkmark:after {
 	top: 1.2px;
	left: 1.4px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: #c14ad2;
}


@media (max-width: 575.98px) {
  .ChoiceImage {
    margin-left: 5%;
    width: 70%;
  }

  .questionImage {
    width: 70%;
  }

  .examCard {
    width: 95%;
  }

  .space {
            height: 10vh;
        }
}
    </style>
@endsection