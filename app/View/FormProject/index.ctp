
    
    <!-- THE FORM  -->
<div class="container">
    <form class="form-horizontal" name="x" action="<?php echo $this->Html->url(array("controller"=>"formProject", "action"=>"save")); ?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Complete the following form to add information in the graph</legend>
            
            <blockquote>
                <p>With this form you can add a project
                </p>
            </blockquote>
            
            
            
            <!-- PROJECT  -->
            <h2> Project</h2>
            
            
            <div class="control-group">
                <label class="control-label" for="input01">Project Name</label>
                <div class="controls">
                    <input type="text" name ="project_name" class="input-xlarge" id="input01" placeholder="Type something…">
                        </div>
            </div>
            
            
            <div class="control-group">
                <label class="control-label" for="textarea">The project 's descrition </label>
                <div class="controls">
                    <textarea class="input-xlarge" name ="project_description" id="textarea" rows="3"></textarea>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="fileInput">File input</label>
                <div class="controls">
                    <input class="input-file" name="my_files" id="fileInput" type="file" multiple = "multiple">
                        <p class="help-block">Add files to the project</p>
                        </div>
            </div>
            
            <h4>Actors</h4>
            
            <div class="control-group">
              <label class="control-label">The Actors</label>
              <div class="controls">
                <select name ="project_actors[]" size="10" multiple>
                  <?php foreach($actors as $actor) { ?>
                  <option value="<?php echo $actor['Actor']['id'] ; ?>"><?php echo $actor['Actor']['firstName'] . ' ' . $actor['Actor']['lastName'] ; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label" for="textarea">An actor is
              missing ?</label>
              <div class="controls">
                <?php echo $this->Html->link('Add an actor', array('controller'=>'formActor'), array('target'=>'_blank', 'class'=>'btn btn-primary')); ?>
                <p class="help-block">First, create the projet, then add an actor and link it with that project.</p>
              </div>
            </div>
            
            <!-- KEY WORDS  -->
            <h4> Key Words</h4>
            
            <div class="control-group">
                <label class="control-label" for="select01">The key word list</label>
                <div class="controls">
                  <select name ="project_keywords[]" size="10" multiple>
                    <?php foreach($keywords as $kw) { ?>
                    <option value="<?php echo $kw['Keyword']['id'] ; ?>"><?php echo $kw['Keyword']['title'] ; ?></option>
                    <?php } ?>
                  </select>
                    <br><br>
                    
                    <div id="gen_key_word"></div>
                    
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="textarea">Other key words </label>
                <div class="controls">
                    <textarea class="input-xlarge" name ="other_key_word" id="textarea2" rows="2"></textarea>
                    <p class="help-block">Please, use a semi-colon to separate the different key words.</p>
                </div>
            </div>

    </div> <!-- end div container  -->

    
    <!-- BUTTONS AT THE BOTTOM  -->
            <div align="center" class="form-actions">
                <button align="center" type="submit" class="btn btn-primary">Save changes</button>
                <button align="center" class="btn">Cancel</button>    
        </fieldset>
    </form>
  </div>