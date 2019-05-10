@extends('layouts.mainlayout')

@section('content')
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
          </ol>
          <h6 class="slim-pagetitle">Basic Tables</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Basic Table</label>
          <p class="mg-b-20 mg-sm-b-40">Using the most basic table markup.</p>

          <div class="table-responsive">
            <table class="table mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>$162,700</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Striped Rows</label>
          <p class="mg-b-20 mg-sm-b-40">Add zebra-striping to any table row.</p>

          <div class="table-responsive">
            <table class="table table-striped mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>$162,700</td>
                </tr>
              </tbody>
            </table>
          </div><!-- bd -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Bordered Table</label>
          <p class="mg-b-20 mg-sm-b-40">Add borders on all sides of the table and cells.</p>

          <div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>$162,700</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Hoverable Rows</label>
          <p class="mg-b-20 mg-sm-b-40">To enable a hover state on table rows.</p>

          <div class="table-responsive">
            <table class="table table-hover mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>$162,700</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Colored Header Variations</label>
          <p class="mg-b-20 mg-sm-b-40">A custom color for the head of the tables.</p>

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="thead-colored bg-primary">
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->


          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="thead-colored bg-success">
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="thead-colored bg-warning">
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <table class="table table-bordered">
            <thead class="thead-colored bg-danger">
              <tr>
                <th class="wd-10p">ID</th>
                <th class="wd-35p">Name</th>
                <th class="wd-35p">Position</th>
                <th class="wd-20p">Salary</th>
              </tr>
            </thead>
          </table>

          <table class="table table-bordered">
            <thead class="thead-colored bg-info">
              <tr>
                <th class="wd-10p">ID</th>
                <th class="wd-35p">Name</th>
                <th class="wd-35p">Position</th>
                <th class="wd-20p">Salary</th>
              </tr>
            </thead>
          </table>

          <table class="table table-bordered">
            <thead class="thead-colored bg-teal">
              <tr>
                <th class="wd-10p">ID</th>
                <th class="wd-35p">Name</th>
                <th class="wd-35p">Position</th>
                <th class="wd-20p">Salary</th>
              </tr>
            </thead>
          </table>

          <table class="table table-bordered">
            <thead class="thead-colored bg-indigo">
              <tr>
                <th class="wd-10p">ID</th>
                <th class="wd-35p">Name</th>
                <th class="wd-35p">Position</th>
                <th class="wd-20p">Salary</th>
              </tr>
            </thead>
          </table>

          <table class="table table-bordered">
            <thead class="thead-colored bg-purple">
              <tr>
                <th class="wd-10p">ID</th>
                <th class="wd-35p">Name</th>
                <th class="wd-35p">Position</th>
                <th class="wd-20p">Salary</th>
              </tr>
            </thead>
          </table>

          <table class="table table-bordered">
            <thead class="thead-colored bg-pink">
              <tr>
                <th class="wd-10p">ID</th>
                <th class="wd-35p">Name</th>
                <th class="wd-35p">Position</th>
                <th class="wd-20p">Salary</th>
              </tr>
            </thead>
          </table>

          <table class="table table-bordered">
            <thead class="thead-colored bg-orange">
              <tr>
                <th class="wd-10p">ID</th>
                <th class="wd-35p">Name</th>
                <th class="wd-35p">Position</th>
                <th class="wd-20p">Salary</th>
              </tr>
            </thead>
          </table>

          <p class="section-label mg-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="thead-colored thead-[value]"</code></td>
                <td>primary | success | warning | danger | info | teal | indigo | purple | pink | orange</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Full Color Variations</label>
          <p class="mg-b-20 mg-sm-b-40">A custom full color variations for the entire table.</p>

          <div class="table-responsive">
            <table class="table table-bordered table-colored table-primary">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>$162,700</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="table-responsive">
            <table class="table table-bordered table-colored table-success">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>$162,700</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="table-responsive">
            <table class="table table-bordered table-colored table-warning">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashton Cox</td>
                  <td>Junior Technical Author</td>
                  <td>$86,000</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Cedric Kelly</td>
                  <td>Senior Javascript Developer</td>
                  <td>$433,060</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>$162,700</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="table-responsive">
            <table class="table table-bordered table-colored table-danger">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="table-responsive">
            <table class="table table-bordered table-colored table-info">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="table-responsive">
            <table class="table table-bordered table-colored table-teal">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="table-responsive">
            <table class="table table-bordered table-colored table-indigo">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="table-responsive">
            <table class="table table-bordered table-colored table-purple">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="table-responsive">
            <table class="table table-bordered table-colored table-pink">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <div class="table-responsive">
            <table class="table table-bordered table-colored table-orange">
              <thead>
                <tr>
                  <th class="wd-10p">ID</th>
                  <th class="wd-35p">Name</th>
                  <th class="wd-35p">Position</th>
                  <th class="wd-20p">Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>$170,750</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->

          <p class="section-label mg-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="table table-[value]"</code></td>
                <td>primary | success | warning | danger | info | teal | indigo | purple | pink | orange</td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
@endsection

@section('footerscripts')
	@parent
    <script src="{{asset('assets/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
@endsection
