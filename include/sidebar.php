<aside id="sidebar" class="sidebar">
  <div id="close" class="closebtn d-none">
    <h1>&times;</h1>
  </div>
  <div class="bg-yellow logo-container">
    <a href="/"><img src="img/icons/logo.svg" alt="logo image" class="img-fluid logo-img"></a>
  </div>

  <div class="side-nav-padding">
    <p class="nav-br">
      <a href="/" class="clr-dk-grey <?php if(isset($home)){echo $home;} ?>">Home</a>
    </p>
    <p class="br-tp nav-br">
      <a href="about" class="clr-dk-grey  <?php if(isset($about)){echo $about;} ?>">About</a>
    </p>
    <p class="br-tp nav-br">
      <a href="community" class="clr-dk-grey <?php if(isset($community)){echo $community;} ?>">Community</a>
    </p>
    <p class="br-tp nav-br">
      <a href="blog" class="clr-dk-grey <?php if(isset($blog)){echo $blog;} ?>">Blog</a>
    </p>
    <p class="br-tp nav-br br-b">
      <a href="#" class="clr-dk-grey" data-toggle="modal" data-target="#exampleModalCenter">contact</a>
    </p>

    <div class="social-media-links pt-3 br-b">
      <a href="" class="pr-3">
        <img src="img/icons/ic_twitter.svg" class="img-fluid">
      </a>
      <a href="" class="pr-3">
        <img src="img/icons/ic_facebook.svg" class="img-fluid">
      </a>
      <a href="" class="">
        <img src="img/icons/ic_instagram.svg" class="img-fluid">
      </a>
    </div>

    <p class="clr-dk-grey cr-statment pt-3">
      © <script>document.write(new Date().getFullYear())</script> Tech PH
    </p>

  </div>
</aside>


<a class="btn-w" href="#" data-toggle="modal" data-target="#exampleModalCenter">
  <img class="w-img" src="img/icons/ic_profile.svg">
</a> 




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-white">
        <h5 class="modal-title clr-dk-blue" id="exampleModalLongTitle">Contact us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="contact-form">
          <div class="form-row">
          <div class="col-md-12">
            <input type="text" id="name" class="tech-ph-control" placeholder="Name">
          </div>
        </div>
        <div class="form-row mt-4">
          <div class="col-md-12">
            <input type="text" id="email" class="tech-ph-control" placeholder="Email">
          </div>
        </div>
        <div class="form-row mt-4">
          <div class="col-md-12">
          <textarea class="tech-ph-control" type="textarea" id="message" placeholder="Message" rows="3"></textarea>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12">
            <div id="errorMessage"></div>
            <button type="submit" class="btn btn-submit mt-4 clr-blue">Submit</a>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>