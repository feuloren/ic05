
    <!-- THE FORM  -->
<div class="container">
    <form class="form-horizontal" name="x" action="form_cible.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Complete the following form to add information in the graph</legend>
            
            <blockquote>
                <p>With this form you can add an actor or a project
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
                <label class="control-label" for="textarea">The actor 's'descrition </label>
                <div class="controls">
                    <textarea class="input-xlarge" name ="actor_description" id="textarea" rows="3"></textarea>
                </div>
            </div>
            
            
            
            
            <div class="control-group">
                <label class="control-label" for="fileInput">File input</label>
                <div class="controls">
                    <input class="input-file" id="fileInput" type="file" multiple = "multiple">
                        <p class="help-block">Add files to the actor</p>
                        </div>
            </div>
            
            <!-- PROJECT  -->
            <h2> Project</h2>
            
            
            <div class="control-group">
                <label class="control-label" for="input01">Project Name</label>
                <div class="controls">
                    <input type="text" name ="project_name" class="input-xlarge" id="input01" placeholder="Type something…">
                        <p class="help-block">If it is not a new one use the right name.</p>
                        </div>
            </div>
            
            
            <div class="control-group">
                <label class="control-label" for="textarea">The project 's descrition </label>
                <div class="controls">
                    <textarea class="input-xlarge" name ="project_description" id="textarea" rows="3"></textarea>
                </div>
            </div>
            
            
            <div class="control-group">
                <label class="control-label" for="textarea">The other actors of the project </label>
                <div class="controls">
                    <textarea class="input-xlarge" name ="other_actors" id="textarea" rows="2"></textarea>
                    <p class="help-block">Write the actors of the form "firt name  and Last name" and separate the different actor by a semi-colon. Example : Jenny Smith; James Kenedy</p>
                </div>
            </div>
            
            
            <div class="control-group">
                <label class="control-label" for="fileInput">File input</label>
                <div class="controls">
                    <input class="input-file" name="my_files" id="fileInput" type="file" multiple = "multiple">
                        <p class="help-block">Add files to the project</p>
                        </div>
            </div>
            
            
            <!-- KEY WORDS  -->
            <h4> Key Words
            <input type="button" id="jq_gen_key_word" value="add a key word"/>
            </h4>
            
            <div class="control-group">
                <label class="control-label" for="select01">Key word</label>
                <div class="controls">
                    <select name ="key_word_init" id="key_word_init">
                        <option value="" selected="selected">no key word</option>
                        <option>Key word 1</option>
                        <option>Key word 2</option>
                        <option>Key word 3</option>
                        <option>Key word 4</option>
                        <option>Key word 5</option>
                    </select>

                    <br><br>
                    
                    <div id="gen_key_word"></div>
                    
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="textarea">Other key words </label>
                <div class="controls">
                    <textarea class="input-xlarge" name ="other_key_word" id="textarea" rows="2"></textarea>
                    <p class="help-block">Use a semi-colon to separate the different key words.</p>
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
