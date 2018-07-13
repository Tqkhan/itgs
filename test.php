<input type="text" x-webkit-speech />
<div id="log"></div>
<script>
var recognition = new webkitSpeechRecognition();
recognition.lang = "en-GB";
recognition.continuous = true;
recognition.interimResults = true;
recognition.onresult = function(event) { 
  console.log(event) 
  alert(event)
  document.getElementById("log").innerHTML = event;
}
recognition.start();
</script>