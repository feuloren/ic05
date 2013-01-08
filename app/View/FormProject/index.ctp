
    
    <!-- THE FORM  -->
<div class="container">
    <form class="form-horizontal" name="x" action="form_cible.php" method="post" enctype="multipart/form-data">
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
            <h4> Key Words</h4>
            
            <div class="control-group">
                <label class="control-label" for="select01">The key word list</label>
                <div class="controls">
                    <select name ="key_word_init" id="key_word_init" size="10" multiple>
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
