<div class="container-fluid tab-one-box">
<div class="headTabOne row">
    <div class="col selectHead">หมวดหมู่</div>
    <div class="col">ข้อสอบย้อนหลัง</div>
</div>
    <ul class="tab-one tabOneRow">
    </ul>
</div>
</div>
<div class=" randomExam hidden">
<ul class="tab-one tabOneRow hidden">
    <li><a href="/tabone/-1/0"> สุ่มทำข้อสอบปี 2563</a></li>
    <li><a href="/tabone/-1/0"> สุ่มทำข้อสอบปี 2562</a></li>
    <li><a href="/tabone/-1/0"> สุ่มทำข้อสอบปี 2561</a></li>
    <li><a href="/tabone/-1/0"> สุ่มทำข้อสอบปี 2560</a></li>
    </ul>
</div>
<x-bottom-banner />


</div>
<style>

.headTabOne {
   margin-top: 1vh;
   background-color: rgba(255,255,255,0.1);
   color:  rgba(255,255,255,0.5);;
   text-align: center;
   /* padding: 1%; */
   padding-top: 5%;
   cursor: context-menu;
  }

  .selectHead {
      border-bottom: 2px solid #fff;
      padding-bottom: 1%;
      color:  #fff;
  }

  .tab-one-box {
      /* height: 105vh; */
  }

  .randomExam {
      min-height: 80vh;
  }

 .tab-one {
     color: #fff;
     margin: auto;
     margin-top: 2%;
     margin-bottom: 7%;
     text-align: center;
     background-color: rgba(255,255,255,0.1);
     padding-left: 0;
     width: 60%;
 }
 
 .tab-one li {
    list-style-type:none;
    border-bottom: solid rgba(255,255,255,0.4) 1px;
    padding: 10px;
    cursor: pointer;
 }
 .tab-one li a {
    color: #fff;
    text-decoration: none;
 }

 @media (max-width: 575.98px) {
    .tabOneRow {
        width: 90%;
    }

    .headTabOne {
        margin-top: 5vh;
        padding-top: 6%;
    }
 }
</style>