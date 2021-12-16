<?php
    include 'header.php';
    include 'nav.php';
?>

<!-- HERO SECTION-->
<div class="px-4 py-5 text-center bg-light">
    <h1 class="display-1 mb-5">Playlist Builder</h1>
</div>


<div class="container my-5">
    <div class="row">
        <h2>Builder</h2>
    </div>
    <div class="row text-center mb-5">
        <div class="col-md-4 text-center">
          <img
            src="img/placeholder.png"
            class="img-fluid cover-art"
            alt="Placeholder"
          />
          <form class="mt-3" method="get" action="/play.php/">
            <label>Select a file:</label>
            <input type="file"><br><br>
        </div>
        
        <div class="col-md-8">
            <div class="row mb-3">
              <label for="inputPlaylistTitle" class="col-sm-2 col-form-label"
                >Playlist Title:</label
              >
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPlaylistTitle" />
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputPlaylistLink" class="col-sm-2 col-form-label"
                >Playlist Link:</label
              >
              <div class="col-sm-10">
                <input
                  type="text"
                  class="form-control"
                  id="inputPlayListLink"
                  placeholder="Spotify, YouTube, SoundCloud..."
                />
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputMessage" class="col-sm-2 col-form-label">Message:</label>
              <div class="col-sm-10">
                <div>
                  <textarea class="form-control message" placeholder="Leave a message here..."></textarea>
                  
                  
                </div>
              </div>
            </div>
            </form>
            <a href="play.php">    
                <button type="submit" class="btn btn-primary float-end">MINT PLAYLIST</button>
            </a>
        </div>
      </div>
    </div>

    
    </div>
</div>

<?php
    include 'footer.php';
?>