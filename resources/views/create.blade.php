@include('inc.header')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form lpformnum="1">
                    <fieldset>
                        <legend>Post your Reminder</legend>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Title" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                            </div>
                            <div class="form-group">
                            <label for="exampleTextarea">Description</label>
                            <textarea class="form-control" id="description" rows="3" placeholder="Enter Description"></textarea>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@include('inc.footer')