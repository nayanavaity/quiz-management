<h2><strong>Questions</strong></h2>
<hr>

<form method="POST" action="" class="">


    
    <div class="row input_row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
                <div class="col-md-10 col-sm-10 col-xs-10">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row input_row">
        <div class="col-md-12">
            <div class='form-group'>
                <label class="control-label col-md-2 col-sm-2 col-xs-12">
                    
                </label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    
                </div>
            </div>
        </div>
    </div>
    <hr>



<div class="row input_row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Submit</button> &nbsp;
                <a href="{{ route('home') }}" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </div>
</div>
</form>