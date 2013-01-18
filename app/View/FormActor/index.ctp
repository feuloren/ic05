<!-- THE FORM  -->
<div class="container">
   <form class="form-horizontal" name="x" action="<?php echo $this->Html->url(array("controller"=>"formActor", "action"=>"save")); ?>" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Complete the following form to add information in the graph</legend>
            
            <blockquote>
                <p>With this form you can add an actor
                </p>
            </blockquote>
            
            
            <!-- ACTORS  -->
            <h2> Actor </h2>
            
            <div class="control-group">
                <label class="control-label" for="input01">Last name</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name ="last_name" id="input01" placeholder="Type something…">
                        <p class="help-block">Whether your are a new actors or not</p>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="input01">First Name</label>
                <div class="controls">
                    <input type="text" class="input-xlarge" name ="first_name" id="input01" placeholder="Type something…">
                        <p class="help-block">Whether your are a new actors or not</p>
                        </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="input01">Email</label>
                <div class="controls">
                    <input type="email" name="email" autocomplete="on" class="input-xlarge" id="input01" placeholder="Type something…">
                        <p class="help-block">Whether your are a new actors or not, if you are not new use the email you used the first time.</p>
                        </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="select01">Type of actor</label>
                <div class="controls">
                    <select name ="actor_type" id="select01">
                        <option value="" selected="selected">no type</option>
                        <option>type 1</option>
                        <option>type 2</option>
                        <option>type 3</option>
                        <option>type 4</option>
                    </select>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="textarea">The actor 's descrition </label>
                <div class="controls">
                    <textarea class="input-xlarge" name ="actor_description" id="textarea" rows="3"></textarea>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="select01">The project in which the actor is involve</label>
                <div class="controls">
                    <select name ="actor_project[]" id="select01" size="10" multiple>
                        <?php foreach($projects as $project) { ?>
                        <option value="<?php echo $project['Project']['id'] ; ?>"><?php echo $project['Project']['title'] ; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            
                
            
            
            <div class="control-group">
                <label class="control-label" for="fileInput">File input</label>
                <div class="controls">
                    <input class="input-file" id="fileInput" type="file" multiple = "multiple">
                        <p class="help-block">Add files to the actor</p>
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
