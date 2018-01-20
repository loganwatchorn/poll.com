<?php
header('content-type:text/css')
?>

@charset "utf-8";
body {
 position:relative;
 width:100%;
 margin-left:0px;
 margin-top:0;
 margin-right:0;
 margin-bottom:0;
 font-family:arial;
 background-color:#ccc;
}
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #E68A00;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #E68A00;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #E68A00;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #E68A00;
}
.fpsnawrapper {
  height:140px;
  width:100%;
  background-color:#5c5c5c;
  position:fixed;
  bottom:0;
  left:0;
  z-index:5;
  border-style:solid;
  border-color:#fff;
  border-width:1px;
  border-bottom:0;
  border-left:0;
  border-right:0;
}
.f, .p, .s, .n, .a, .fselected, .pselected, .sselected, .nselected, .aselected {
 text-align:center;
 vertical-align:center;
 text-decoration:none;
 padding-top:40px;
 padding-bottom:20px;
 height:80px;
 position:fixed;
 bottom:0;
 border-top:0;
 border-left:0;
 border-right:0;
 border-color:#970100;
 margin-bottom:0;
 z-index:5;
 width:20%;
}
.f, .p, .s, .n, .a {
 background-color:#5A5A5A;
 border-bottom:0;
 color:#FF8F00;
 float:left
}
.f img, .p img, .s img, .n img, .a img {
  height:70px;
  width:auto;
}
.f:active, .p:active, .s:active, .n:active, .a:active, .fselected, .pselected, .sselected, .nselected, .aselected {
  background-color:#3C3C3C;
  /*border-bottom:15px solid;*/
  border-color:#970100;
  color:#FFA400;
  z-index:6;
}
.p:active {
  background-color:#ff8f00;
  border-color:#3c3c3c;
}
.f, .fselected {
 width:28%;
 left:0;
}
.p {
  background-color:#ffaf00;
}
.p, .pselected {
 width:18%;
 left:28%;
}
.s, .sselected {
 width:18%;
 left:46%;
}
.n, .nselected {
 width:18%;
 left:64%;
}
.a, .aselected {
 width:18%;
 left:82%;
}
.mainheader, .sheader, .nheader, .setheader, .aheader {
 font-size:30px;
 width:100%;
 position:fixed;
 height:130px;
 top:0;
 z-index:3;
 border-style:solid;
 border-width:10px;
 border-left:0;
 border-right:0;
 border-top:0px;
 border-color:#970100;
 background-color:#ff8f00;
 float:left;
 }
.mainheader h1, .pheader h1, .nheader h1, .aheader h1 {
   padding-left:3%;
   padding-top:30px;
   font-size:60px;
   width:98%;
   background-color:#ff8f00;
   height:60px;
   z-index:3;
   margin-top:0;
   margin-left:0;
   margin-bottom:0;
 }
.aheader {
   position:absolute;
   top:0;
   left:0;
 }
.aheader h1 {
   width:97%;
   margin-left:3%;
   padding-left:0;
   padding-right:0;
   margin-right:0;
 }
.nheader h1{
   text-align:left;
 }
.pheader h1, .nheader h1 {
  position:fixed;
  top:0;
  left:0
}
.mainheader h1 {
  position:absolute;
  top:0;
  left:0;
}
.mainheader a, .nheader a, .aheader a {
 height:130px;
 width:150px;
 position:fixed;
 top:0px;
 right:0px;
 color:#FF8F00;
 z-index:4;
}
.aheader a {
  position:absolute;
  top:0;
  right:0;
}
.nheader h1, .aheader h1 {
  font-weight:bold;
}
.mainheader a img, .nheader a img, .aheader a img {
  height:100px;
  width:auto;
  margin-top:18px;
}
.aheader a img {
  padding-left:25px;
}
.mainheader, .backheader, .nheader {
 text-align:center;
}
.setbg {
  background-color:#9c9c9c;
}
.backheader, .setheader {
  height:130px;
  width:100%;
  float:top;
  top:0;
  left:0;
  margin:0;
  background-color:#3c3c3c;
  color:#ff8f00;
}
.backheader h3, .setheader h1 {
  text-align:left;
  font-size:60px;
  height:60px;
  margin-left:170px;
  padding-left:40px;
  position:absolute;
  top:0;
  z-index:3;
  padding-top:10px;
  padding-bottom:10px;
  margin-top:20px;
  margin-bottom:0;
  border-style:solid;
  border-color:#970100;
  border-width:5px;
  border-top:0;
  border-right:0;
  border-bottom:0;
}
.setheader {
  border-style:solid;
  border-left:0;
  border-top:0;
  border-left:0;
  border-width:10px;
  border-color:#970100;
  background-color:#ff8f00;
}
.header h3 {
  font-size:70px;
  margin-top:20px;
  margin-left:170px;
  width:600px;
  text-align:center;
  border-style:solid;
  border-color:#970100;
  border-width:10px;
  border-top:0;
  border-right:0;
  border-bottom:0;
}
.setheader h1{
 border-color:#3c3c3c;
 color:#3c3c3c;
}
.backheader input, .setheader input {
  color:#ff8f00;
  float:left;
  position:absolute;
  left:0;
  top:0px;
  width:170px;
  height:120px;
  background-color:inherit;
  border:0;
  font-size:120px;
  line-height:0;
  padding-bottom:20px;
}
.setheader input {
  color:#3c3c3c;
}
.uacheader {
   border-bottom:10px solid #970100;
}
.follow, .unfollow {
  height:90px;
  width:90px;
  background-color:#ff8f00;
  border:5px solid #970100;
  border-radius:10px;
  position:absolute;
  top:15px;
  right:15px;
}
.unfollow {
  background-color:#5c5c5c;
  text-decoration:none;
}
.follow img {
  height:70px;
  width:70px;
  margin-top:10px;
}
.unfollow h1 {
  font-size:70px;
  margin:0;
  color:#ff8f00;
}
.usernoposts {
  width:100%;
  text-align:center;
  font-size:45px;
}
.sbg {
   background-color:#ccc;
 }
.searchbar input {
 position:absolute;
 top:20px;
 font-size:50px;
 height:50px;
 padding-top:15px;
 padding-bottom:15px;
 left:3%;
 width:92%;
 color:#FFaF00;
 background-color:#5A5A5A;
 border:none;
 padding-left:2%;
 border-radius:5px;
}
.searchwrapper {
  height:120px;
  background-color:#3c3c3c;
  width:100%;
  position:fixed;
  top:0;
  border-style:solid;
  border-width:10px;
  border-color:#970100;
  border-right:0;
  border-left:0;
  border-top:0;
}
.searchpollsusers {
  position:absolute;
  top:130px;
  width:100%;
  height:180px;
  margin:0;
  background-color:#ff8f00;
  border-bottom:solid 7px #970100;
  text-align:center;
}
.searchpolls, .searchusers {
  width:50%;
  height:170px;
  padding-bottom:10px;
  float:left;
  padding-left:0;
  padding-right:0;
  background-color:inherit;
  border:0;
}
.normalfw h1 {
  font-weight:normal;
}
.searchpolls h1, .searchusers h1 {
  width:100%;
  font-size:50px;
  height:50px;
  padding-left:0;
  padding-right:0;
  padding-top:40px;
  padding-bottom:40px;
  margin:0;
  margin-top:25px;
}
.searchpolls h1{
  border-right:solid 5px #970100;
  width:99%;
}
.searchusers h1 {
  border:0
}
.sruerror, .srperror {
  position:absolute;
  top:50px;
  width:100%;
  text-align:center;
  font-size:40px;
}
.searchresults {
  position:absolute;
  top:130px;
  left:0;
  width:100%;
}
.feed {
  position:absolute;
  top:240px;
  width:100%;
}
.profpic, .profpicep {
 width:175px;
 height:175px;
 position:absolute;
 display:block;
 left:60px;
 z-index:2;
 border-radius:50%;
 border:solid 5px #FFFFFF;
}
.profpic {
  top:205px;
}
.profpicep {
  top:200px;
}
.profpicep img {
  width:175px;
  height:175px;
  border-radius:50%;
}
.covpic, .covpicep {
 position:absolute;
 left:0;
 width:100%;
 height:auto;
 z-index:1;
 margin-right:0;
 margin-left:0;
 float:left;
}
.covpic, .covpicep img {
  border-style:solid;
  border-width:7px;
  border-color:#970100;
  border-left:0;
  border-right:0;
}
.covpic {
 top:132px;
}
.covpicep {
  padding:0;
  height:auto;
  float:top;
}
.name, .nameep {
 z-index:2;
 position:absolute;
 left:265px;
 font-size:60px;
 color:#FFFFFF;
}
.name {
  top:226px;
}
.nameep {
  top:256px;
  height:60px;
  font-family:arial;
  font-weight:bold;
}
.followers {
  position:absolute;
  right:20px;
  top:375px;
  margin-top:0;
  margin-bottom:0;
  font-size:45px;
  z-index:5;
  color:#ccc;
  opacity:.9;
  padding:5px;
  padding-left:5px;
  padding-right:5px;
  background-color:#5c5c5c;
  border-radius:7px;
}
.pdv {
  position:absolute;
  top:458px;
  width:100%;
  background-color:#bdbcb9;
  height:162px;
  border-style:solid;
  border-top:6px #970100 solid;
  border-bottom:8px #970100 solid;
  border-right:0;
  border-left:0;
}
.direct, .asked, .votes {
 width:33.33%;
 position:absolute;
 background-color:#bdbcb9;
 color:#000;
 border-width:5px;
 text-align:center;
 font-size:45px;
 height:100px;
 padding-top:0px;
 padding-bottom:50px;
 border-bottom:0;
 float:left;
 margin-top:6px;
}
.direct h3, .createdirect h3, .asked h3, .votes h3 {
  font-size:45px;
  height:100px;
  margin-top:30px;
  font-weight:normal;
}
.createdirect {
  position:absolute;
  height:156px;
}
.createdirect h3 {
  margin:0;
  position:absolute;
  text-align:center;
  margin-top:22px;
  background-color:#5c5c5c;

  padding-top:10px;
  padding-bottom:10px;
  width:50%;
  margin-left:25%;
  border-radius:10px;
}
.createdirect h3 img {
  height:100px;
  margin-top:5px;
}
.direct, .createdirect {
 left:33.34%;
 width:33.34%;
}
.direct h3 {
  border-left:solid 7px #5c5c5c;
  border-right:solid 7px #5c5c5c;
  padding-left:3.5px;
  padding-right:3.5px;
}
.asked {
 left:0;
 border-left:0;
}
.votes {
 right:0;
 border-right:none;
}
.rowtable, .rowtablefeed {
  position:absolute;
  width:100%;
  height:100px;
  background-color:#ffaf00;
  border-style:solid;
  border-color:#970100;
  border-width:6px;
  border-left:0;
  border-top:0;
  border-right:0;
  z-index:5;
  opacity: .9;
}
.rowtable {
  top:633px;
}
.rowtablefeed {
  top:140px;
}
.rowtablefixed {
  position:fixed;
  top:0;
  left:0;
}
.rowtable img, .rowtablefeed img {
  width:75px;
  height:75px;
}
.aif {
  position:absolute;
  top:735px;
  width:100%;
  z-index:1;
  padding-bottom:180px;
}
.indexbackground {
  background-color:#3c3c3c;
  height:80%;
}
.indexlogo {
  text-align:center;
  position:fixed;
  width:100%;
  border-radius:10px;
  font-size:150px;
  top:27%;
  padding:0;
  color:#FF8F00;
}
.sisubuttons {
  position:relative;
}
.signup, .signin {
  bottom:0;
  width:50%;
  height:20%;
  text-align:center;
  margin:0;
  border:0;
  text-decoration:none;
}
.signup h1, .signin h1 {
  font-size:65px;
  width:100%;
  height:30%;
  position:absolute;
  margin-top:auto;
  margin-bottom:auto;
  line-height:170%;
}
.signup h1 {
  top:37%;
}
.signin h1 {
  top:45%;
}
.signin p {
  font-size: 35px;
  position:absolute;
  width:100%;
  top:25%;
  margin-top:auto;
  margin-bottom:auto;
}
.signup {
  background-color: #FF8F00;
  color:#000;
  position:fixed;
  left:0px;
  bottom:0px;
}
.signin {
  background-color:#970100;
  color:#FF8F00;
  position:fixed;
  left:50%;
  bottom:0px;
}
.signupbg {
  background-color:#FF8F00;
}
.signinbg {
  background-color:#5c5c5c;
  position:relative;
}
.suwelcome {
  width:100%;
  text-align:center;
  position:absolute;
  padding-top:20%;
  font-size:70px;
  margin-top:0;
}
.sulogo, .silogo {
  font-size:150px;
  position:absolute;
  width:100%;
  text-align:center;
  margin-top:0;
}
.sulogo {
  padding-top:30%;
}
.silogo {
  padding-top:65%;
  color:#ff8f00
}
.sucaa {
  position:absolute;
  top:650px;
  width:100%;
  text-align:center;
  font-size:40px;
  background-color:#3c3c3c;
  color:#ff8f00
}
.createaccountbutton input, .signinbutton input {
  width:100%;
  text-align:center;
  font-size:60px;
  font-weight:bold;
  border:0;
  height:160px;
}
.createaccountbutton input{
  position:absolute;
  top:2200px;
  background-color:#3c3c3c;
  color:#ff8f00
}
.signinbutton input {
  position:fixed;
  bottom:0;
  background-color:#2c2c2c;
  color:#ffaf00;
}
.sufields, .sifields {
  width:100%;
  font-size:40px;
}
.sifields {
  position:fixed;
  bottom:190px;
}
.sufields {
  position:absolute;
  top:800px;
  height:1400px;
  background-color:#4c4c4c
}
.sufields h4 {
  text-align:left;
  padding-left:90px;
  margin-bottom:10px;
  margin-top:70px;
  color:#ff8f00;
}
.sufields input, .sifields input {
  width:86%;
  height:80px;
  padding-top:5px;
  padding-bottom:5px;
  font-size: 45px;
  margin-bottom:0px;
  background-color:#3c3c3c;
  border:0;
  margin-left:3.25%;
  padding-left:25px;
  padding-right:50px;
  color:#ffaf00;
  border-radius:5px;
}
.sufields input {
  margin-top:10px;
}
.sifields input {
  margin-top:30px
}
.sifields input:focus, .sufields input:focus {
  border-width:5px;
  border-right:45px;
  border-style:solid;
  border-color:#970100;
  height:80px;
  padding:0;
  padding-left:25px;
}
.suphperror div {
  width:100%;
}
.suphperror p {
  z-index:2;
  color:#3c3c3c;
  font-size:40px;
  width:99%;
  margin-top:10px;
  margin-left:1%;

}
.pw {
  background-color:#4c4c4c;
  width:100%;
  padding-bottom:50px;
  margin:0;
  margin-top:20px;
  position:relative;
  font-size:50px;
  padding-top:10px;
  border-radius:0px;
  float:left;
  z-index:1;
}
.pw
.pacwrapper {
  position:absolute;
  top:0;
  height:160px;
  width:100%;
  margin-left:auto;
  margin-right:auto;
  border-style:solid;
  border-color:#3c3c3c;
  border-width:7px;
  border-right:0;
  border-left:0;
  border-top:0;
}
.pac {
  position:absolute;
  top:30px;
}
.pac img {
  float:left;
  border-radius:50%;
  border-style:solid;
  border-width:5px;
  border-color:#fff;
  height:90px;
  width:90px;
  margin-left:30px;
}
.pac h2 {
  font-size:60px;
  position:absolute;
  left:155px;
  margin-top:20px;
  margin-bottom:30px;
}
.pq, .pp, .pa, .pv {
  color:#ff8f00;
}
.pq {
  margin-left:25px;
  margin-top:190px;
}
.pq  h3 {
  margin-bottom:20px
}
.postanswers div {
  width:96%;
  margin-left:2%;
  margin-right:2%;
  margin-top:20px;
  background-color:#3c3c3c;
  border-radius:5px;
  padding-top:10px;
  padding-bottom:15px;
  float:left;
  display:table-cell;
}
.pp, .pv {
  text-align:center;
  height:55px;
  border:0;
}
.pp, .pa {
  margin-bottom:0px;
  margin-top:10px;
}
.pp {
  color:#ffaf00;
  font-size:45px;
  margin-bottom:auto;
  margin-top:20px;
  margin-left:0;
  border:0;
  float:left;
  width:13%;
  height:45px;
}
.pp1, .pp2, .pp3, .pp4, .pp5 {
  display:inline-block;
  margin-bottom:auto;
  margin-top:auto;
  margin-left:0;
}
.pa, .pa p {
  text-align:left;
  margin-left:0%;
  padding-top:10px;
  padding-bottom:10px;
  padding-left:3%;
  padding-right:3%;
  width:79%;
  border-style:solid;
  border-width:5px;
  border-color:#970100;
  border-top:0;
  border-bottom:0;
  border-right:0;
  font-size:45px;
  float:left;
  vertical-align:middle;
}
.pf {
  width:96%;
  padding-left:2%;
  padding-right:2%;
  margin-top:40px;
  height:60px;
  float:left;
}
.pfc, .pfc h4, .pfc h3, .pfv, .pfv h4, .pfv h3 {
  float:left;
  margin-top:0;
}
.pf h4 {
  font-size:50px;
  margin-top:5px;
}
.pf h3, .pollsearchresults h3 {
  color:#ffaf00;
  font-size:50px;
  border-radius:5px
}
.pf h3 {
  background-color:#3c3c3c;
  padding-top:3px;
  padding-bottom:3px;
  padding-right:10px;
  padding-left:10px;
  margin-left:20px;
}
.pollsearchresults h3 {
  background-color:#5c5c5c;
  padding-top:15px;
  padding-bottom:15px;
  padding-right:20px;
  padding-left:20px;
  position:absolute;
  top:8px;
  right:20px;
  color:#ffaf00;
  margin-top:23px;
}
.pwcondensed {
  padding-bottom:35px;
  width:96%;
  margin-left:2%;
  border-radius:10px;
}
.pqcondensed , .pqcondensed h3 {
  margin-top:20px;
  font-size:50px;
}
.pfcondensed {
  padding-top:20px;
  margin-top:10px;
  border-top:7px solid #3c3c3c;
}
.pfcondensed h4 {
  font-size:50px;
}
.pfcondensed h3 {
  font-size:55px;
}
.pfc {
  margin-left:20px
}
.pfv {
  float:right;
  margin-right:20px;
}
.pabeforeclicked {
  border:0;
}
.pbackground{
  background-color:#4c4c4c;
}
.pffields {
  width:100%;
  position:absolute;
  top:120px;
}
.pfq textarea, .pfa input {
  width:92%;
  padding-left:2%;
  padding-right:2%;
  padding-top:20px;
  padding-bottom:20px;
  margin-top:30px;
  margin-left:2%;
  margin-right:2%;
  background-color:#3c3c3c;
  color:#ff8f00;
  font-size:40px;
  border:0;
  border-radius:5px;
  font-family:arial;
}
.pfq textarea {
  height:900px;
  font-size:50px;
}
.qdemo {
  font-size:55px;
  margin-left:2%;
  padding-left:10px;
  width:96%;
  margin-top:30px;
  color:#ffaf00;
}
.postbutton input, .showanswers, .showphotoanswers, .addother {
  width:96%;
  margin-left:2%;
  margin-right:2%;
  margin-bottom:20px;
  text-align:center;
  font-size:60px;
  border:0;
  border-radius:10px;
  font-weight:bold;
  z-index:3;
}
.postbutton input {
  background-color:#ff8f00;
  color:#3c3c3c;
  height:150px;
  padding-top:35px;
  padding-bottom:35px;
  position:fixed;
  bottom:0;
  left:0;
}
.showanswers, .showphotoanswers, .addother {
  background-color:#fff;
  color:#0066FF;
  z-index:5;
  border-style:solid;
  border-width:5px;
  border-color:#00CCFF;
  height:125px;
  float:left;
  position:fixed;
  top:1120px;
  left:0;
}
.showphotoanswers {
  background-color:#0066FF;
  color:#000;
  border-color:#000;
  top:1265px;
}
.addother {
  position:static;
  font-size:30px;
  height:110px;
  margin-top:30px;
  background-color:#3c3c3c;
  color:#ff8f00;
  border:0;
}
.otherh1, .othercheck {
  margin:0;
  margin-top:25px;
  width:49%;
  float:left;
  height:50px;
  font-size:50px;
}
.otherh1 {
  text-align:left;
  padding-left:2%;
  padding-top:0;
  width:48%;
}
.othercheck {
  text-align:right;
  font-size:50px;
  padding-bottom:20px;
  padding-right:1%;
  color:#ff8f00;
  margin-top:20px;
}
.postphotoslots {
  width:100%;
}
.pps1, .pps2, .pps3, .pps4 {
  width:50%;
  padding-bottom:50%;
  float:left;
  border:0;
  position:relative;
}
.pps1, .pps2 {
  margin-top:30px;
}
.pps1, .pps4 {
  background-color:#3c3c3c
}
.pps2, .pps3 {
  background-color:#4c4c4c;
}
.pps1 h1, .pps2 h1, .pps3 h1, .pps4 h1 {
  width:49%;
  padding-top:5px;
  padding-bottom:5px;
  font-size:40px;
  position:absolute;
  border-radius: 25px;
}
.pps1 h1, .pps2 h1 {
  top:38%
}
.pps3 h1, .pps4 h1 {
  top:40%;
}
.pps1 h1, .pps3 h1 {
  margin-left:21%;
}
.pps2 h1, .pps4 h1 {
  margin-left:26%;
}
.pps1 h1, .pps4 h1 {
  background-color:#4c4c4c;

}
.pps2 h1, .pps3 h1 {
  background-color:#3c3c3c;
}
.pfphperror {
  font-size:40px;
  margin-left:2%;
  margin-bottom:0;
  position:absolute;
  bottom:20px;
  color:#ffaf00;
  width:96%;
}
.epbg {
  background-color:#9c9c9c;
}
.uep {
  position:fixed;
  top:440px;
  width:100%;
}
.epf {
  width:96%;
  margin-left:2%;
  margin-top:40px;
  float:top;
}
.setoptions {
  position:absolute;
  top:135px;
  width:96%;
  margin-left:2%;
}
.setoptions a {
  background-color:#3c3c3c;
  color:#ff8f00;
  font-size:40px;
  padding-top:25px;
  padding-bottom:25px;
  border-radius:5px;
  float:left;
  width:96%;
  padding-left:2%;
  padding-right:2%;
  margin-top:20px;
  text-decoration:none;
}
.epfh {
  background-color:#2c2c2c;
  color:#ff8f00;
  font-size:25px;
  padding-top:25px;
  padding-bottom:25px;
  border-radius:5px;
  float:left;
  width:100%;
  margin-top:30px;
}
.epfhselected {
  padding-top:10px;
  padding-bottom:10px;
}
.epfh h1 {
  margin:0;
  margin-left:25px;
}
.epfi {
  background-color:#5c5c5c;
  float:left;
  width:100%;
  padding-bottom: 20px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius:5px;
}
.efpif, .efpipw {
  margin:0;
  font-size:50px;
  margin-left: 2.5%;
  margin-top: 20px;
  margin-bottom: 15px;
  padding-left:3%;
  padding-right: 2%;
  padding-top:20px;
  padding-bottom: 20px;
  float:left;
  background-color: #3c3c3c;
  color:#ffaf00;
  border:0;
  border-radius:5px;
}
.efpif {
  width:78%;
}
.efpipw {
  width:90%;
}
.epfis {
  width:10%;
  height:98px;
  float:right;
  font-size:45px;
  margin-top:20px;
  margin-right:2.5%;
  border-radius:5px;
  background-color:#2c2c2c;
  color:#ffaf00;
  border: 0;
}
.rowtable2 button {
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100px;
  background-color:#9c9c9c;
  border-style:solid;
  border-color:#7c7c7c;
  border-width:4px;
  border-left:0;
  border-right:0;
  z-index:5;
}
.searchresultarea {
  position:absolute;
  top:317px;
  width:100%;
}
.pollsearchresults, .usersearchresults {
  float:left;
  width:96%;
  margin-left:2%;
  border-bottom:3px solid #6c6c6c;
  text-decoration:none;
}
.pollsearchresults {
  position:relative;
}
.pollsearchresults h1, .usersearchresults h1 {
  font-size:45px;
  margin-left:20px;
  margin-right:20px;
  margin-bottom:0;
  margin-top:25px;
  color:#000
}
.pollsearchresults h2, .usersearchresults h2 {
  font-size:40px;
  color:#5c5c5c;
  margin-left:20px;
  margin-top:5px;
  margin-bottom:20px;
  font-weight:normal;
}
.pollsearchresults h3 {
  /*794-814 with .pf*/
}
.usersearchresults img {
  height:90px;
  width:90px;
  border-radius:50%;
  border:5px;
  border-style:solid;
  border-color:#5c5c5c;
  float:left;
  margin-left:20px;
  margin-top:25px;
  margin-right:20px;
}
