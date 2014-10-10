<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckeditor/ckfinder.js"></script>

<div class="container-fluid dashback">
      <div class="row">
       <?include "journalist_menu.php";?>
        <div class="col-sm-9 col-md-10">
         
          <h2 class="sub-header">Add article</h2>
         
<form class="form-horizontal addarticle">
<fieldset>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="title">Article title</label>
  <div class="controls">
    <input id="title" name="title" type="text" placeholder="" class="arttitle">
    
  </div>
</div>
<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="subtitle">Subtitle</label>
  <div class="controls">                     
    <textarea id="subtitle" name="subtitle" class="input-xlarge"></textarea>
  </div>
</div>
<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="category">Category</label>
  <div class="controls">
    <select id="category" name="category" class="input-xlarge">
      <option>In the boardroom</option>
      <option>On the bench</option>
      <option>Half time</option>
      <option>Final whistle</option>
    </select>
  </div>
</div>
<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="visibility">Visibility on site</label>
  <div class="controls">
    <select id="visibility" name="visibility" class="input-xlarge">
      <option>Invisible</option>
      <option>Public</option>
    </select>
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="picture">Main picture (at least 1024px in width)</label>
  <div class="controls">                     
<input id="input-1a" type="file" class="file" name="picture" data-show-preview="false">
  </div>
</div>


<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="smallintro">Small Intro</label>
  <div class="controls">                     
    <textarea id="smallintro" name="smallintro" style="height:100px"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="article">Article</label>
  <div class="controls">                     
 </div>
</div>

	<textarea id="editor1" name="editor1" rows="10" cols="20"></textarea>

		<script type="text/javascript">
			var editor = CKEDITOR.replace( 'editor1' );
			editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );
		</script>
	
<button type="button" class="btn btn-success" data-toggle="dropdown" id="navLogin">Submit</button>

</fieldset>
</form>

 <br><br>




        </div>
      </div>
    </div>