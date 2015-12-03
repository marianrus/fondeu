@include('layouts.frontend.master-header')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Bine a-ti venit</h3>
                </div>
                <div class="panel-body">
                    <form method="post" action="/autentificare/login">
                        {!! csrf_field() !!}
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" type="text" name="username" id="username" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" value="Remember Me">Tine-ma minte
                                </label>
                            </div>
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Intra">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>