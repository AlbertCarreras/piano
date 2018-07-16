<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Keyboard Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
</head>

<body>
  <div class="container" id="container">

    <h1>Piano Friend 👋</h1>

    <div class="displayUrlSong" id="displayUrlSong">
      <p>Your friend created a piano song for you.</p>
      <button id="play" data-action="playUrl">►</button>
    </div>

    <div class="controls">
      <input type="text" id="song_name" placeholder="Your Song Name"></input>
      <button id="record">Record</button>
      <button id="save_song">Save</button>
    </div>

    <div id="keys">
      <div class="note ivory" id="C" data-note="C">C</div>
      <div class="note ebony" id="C#" data-note="C#">C#</div>
      <div class="note ivory" id="D" data-note="D">D</div>
      <div class="note ebony" id="Eb" data-note="Eb">Eb</div>
      <div class="note ivory" id="E" data-note="E">E</div>
      <div class="note ivory" id="F" data-note="F">F</div>
      <div class="note ebony" id="F#" data-note="F#">F#</div>
      <div class="note ivory" id="G" data-note="G">G</div>
      <div class="note ebony" id="G#" data-note="G#">G#</div>
      <div class="note ivory" id="A" data-note="A">A</div>
      <div class="note ebony" id="Bb" data-note="Bb">Bb</div>
      <div class="note ivory" id="B" data-note="B">B</div>
    </div>

    <div class="downloader">
        <p>Share the url</p>
        <input type="text" id="shareUrlSong" placeholder="Create and save a song!"/>
        <button id="copypaste">Copy</button>
        <button data-action="visitSongUrl">Visit Your Song Page</button>
    </div>

    <div class="downloader">
      <p>Load Song</p>
      <select id="song_names"></select>
      <button id="play" data-action="playLoad">►</button>
      <hr>
      <div class="x mt1">
        <p>Pitch</p>
        <input id="frqRange" type="range" min="1" max="20" step="0.1">
        <div class="f x">
          <div class="fa s2 ac hue">👴</div>
          <div class="fa s2 ac hue">👨</div>
          <div class="fa s2 ac hue">👦</div>
        </div>
      </div>

      <hr>

      <div class="volume x mt1">
        <p>Volume</p>
        <input type="range" min="0.0" max="5.0" step="0.01" value="0.5" list="volumes" name="volume">
        <datalist id="volumes">
          <option value="0.0" label="Mute">
          <option value="5.0" label="100%">
        </datalist>
      </div>
    </div>

  </div>

</body>
<script src="note.js"></script>
<script src="index.js"></script>

</html>
