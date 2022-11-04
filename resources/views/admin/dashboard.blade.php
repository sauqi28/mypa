@extends('layouts.app')

@section('contents')

<div id="main-content">
  <div class="container-fluid">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h2>Dashboard</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
            <li class="breadcrumb-item">App</li>
            <li class="breadcrumb-item active">Blog</li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="d-flex flex-row-reverse">
            <div class="page_action">
              <button type="button" class="btn btn-primary">Generate Report</button>
              <a href="blog-post.html" class="btn btn-secondary" title="new post">New post</a>
            </div>
            <div class="p-2 d-flex">

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row clearfix row-deck">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
          <div class="body">
            <div class="icon"><i class="fa fa-thumbs-o-up"></i> </div>
            <div class="content">
              <div class="text mb-2 text-uppercase">Likes</div>
              <h4 class="number mb-0">22,500 <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 4%</span></h4>
              <small class="text-muted">Analytics for last Month</small>
            </div>
          </div>
          <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#73cec7" data-fill-Color="#73cec7">2,3,1,5,4,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,4,7,8,2,3,1,4,6,5,4</div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
          <div class="body">
            <div class="icon"><i class="fa fa-comment"></i> </div>
            <div class="content">
              <div class="text mb-2 text-uppercase">Comments</div>
              <h4 class="number mb-0">500 <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 11%</span></h4>
              <small class="text-muted">Analytics for last Month</small>
            </div>
          </div>
          <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#7ea7de" data-fill-Color="#7ea7de">7,8,2,3,1,4,6,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3,1,5,4,5,4,4</div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
          <div class="body">
            <div class="icon"><i class="fa fa-share-alt"></i> </div>
            <div class="content">
              <div class="text mb-2 text-uppercase">Share</div>
              <h4 class="number mb-0">2,215 <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 9%</span></h4>
              <small class="text-muted">Analytics for last Month</small>
            </div>
          </div>
          <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#84d4a6" data-fill-Color="#84d4a6">2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3,1,5,4,7,8,2,3,1,4,6,5,4,4</div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
          <div class="body">
            <div class="icon"><i class="fa fa-eye"></i> </div>
            <div class="content">
              <div class="text mb-2 text-uppercase">View</div>
              <h4 class="number mb-0">421,215 <span class="font-12 text-muted"><i class="fa fa-level-down"></i> 2%</span></h4>
              <small class="text-muted">Analytics for last Month</small>
            </div>
          </div>
          <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="#efc26b" data-fill-Color="#efc26b">2,3,1,5,4,7,8,2,3,1,4,6,5,4,4,1,5,4,7,8,2,3,1,4,6,5,4,4,2,3</div>
        </div>
      </div>
    </div>

    <div class="row clearfix row-deck">
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
          <div class="body text-center">
            <input type="text" class="knob2" value="66" data-linecap="round" data-width="100" data-height="100" data-thickness="0.1" data-fgColor="#4CAF50" readonly>
            <h5 class="mt-4 mb-0">Twitter</h5>
            <small>56% Increase</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
          <div class="body text-center">
            <input type="text" class="knob2" value="26" data-linecap="round" data-width="100" data-height="100" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
            <h5 class="mt-4 mb-0">Facebook</h5>
            <small>87% Increase</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
          <div class="body text-center">
            <input type="text" class="knob2" value="76" data-linecap="round" data-width="100" data-height="100" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
            <h5 class="mt-4 mb-0">Instagram</h5>
            <small>16% Increase</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
          <div class="body text-center">
            <input type="text" class="knob2" value="76" data-linecap="round" data-width="100" data-height="100" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
            <h5 class="mt-4 mb-0">Google +</h5>
            <small>37% Increase</small>
          </div>
        </div>
      </div>
    </div>

    <div class="row clearfix row-deck">
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="header">
            <h2>Return Visitor Information</h2>
            <ul class="header-dropdown">
              <li><a href="#" title=""><i class="fa fa-envelope"></i></a></li>
              <li><a href="#" title=""><i class="fa fa-download"></i></a></li>
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="javascript:void(0);">Action</a></li>
                  <li><a href="javascript:void(0);">Another Action</a></li>
                  <li><a href="javascript:void(0);">Something else</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="body">
            <div id="Return-Visitor-Information"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="header">
            <h2>Bounce Rate</h2>
            <ul class="header-dropdown">
              <li><a href="#" title=""><i class="fa fa-envelope"></i></a></li>
              <li><a href="#" title=""><i class="fa fa-download"></i></a></li>
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="javascript:void(0);">Action</a></li>
                  <li><a href="javascript:void(0);">Another Action</a></li>
                  <li><a href="javascript:void(0);">Something else</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="body">
            <div id="Bounce-Rate"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row clearfix row-deck">
      <div class="col-xl-7 col-lg-12 col-md-12">
        <div class="card">
          <div class="header">
            <h2>Visitors Statistics</h2>
          </div>
          <div class="body">
            <div class="row">
              <div class="col-6">
                <small>Page Views</small>
                <h4 class="mb-0">32,211,536</h4>
              </div>
              <div class="col-6">
                <small>Site Visitors</small>
                <h4 class="mb-0">23,516</h4>
              </div>
            </div>
            <div id="world-map-markers" class="mt-3" style="height: 280px;"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-5 col-lg-12 col-md-12">
        <div class="card">
          <div class="header">
            <h2>Marketing Campaign <small>This Month </small></h2>
          </div>
          <div class="body">
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <tbody>
                  <tr>
                    <td>
                      <i class="fa fa-facebook fa-2x"></i>
                    </td>
                    <td>
                      <h6 class="margin-0">Facebook Ads</h6>
                      <span>1.2k Likes, 418 Shares</span>
                    </td>
                    <td>
                      <h6 class="mb-0">$ 402</h6>
                      <span class="text-muted">Spent</span>
                    </td>
                    <td class="text-right">
                      <div class="text-success">
                        23 <i class="fa fa-long-arrow-up"></i>
                      </div>
                      <div class="text-muted">up</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="fa fa-twitter fa-2x"></i>
                    </td>
                    <td>
                      <h6 class="margin-0">Twitter Ads</h6>
                      <span>1k Likes, 128 Shares</span>
                    </td>
                    <td>
                      <h6 class="mb-0">$ 489</h6>
                      <span class="text-muted">Spent</span>
                    </td>
                    <td class="text-right">
                      <div class="text-danger">
                        -9 <i class="fa fa-long-arrow-down"></i>
                      </div>
                      <div class="text-muted">down</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="fa fa-instagram fa-2x"></i>
                    </td>
                    <td>
                      <h6 class="margin-0">Instagram Post</h6>
                      <span>1k Follows, 228 Likes</span>
                    </td>
                    <td>
                      <h6 class="mb-0">$ 718 </h6>
                      <span class="text-muted">Spent</span>
                    </td>
                    <td class="text-right">
                      <div class=" text-success">
                        16 <i class="fa  fa-long-arrow-up"></i>
                      </div>
                      <div class="text-muted">up</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="fa fa-linkedin fa-2x"></i>
                    </td>
                    <td>
                      <h6 class="margin-0">LinkedIn Post</h6>
                      <span>1k Follows, 228 Likes</span>
                    </td>
                    <td>
                      <h6 class="mb-0">$ 768</h6>
                      <span class="text-muted">Spent</span>
                    </td>
                    <td class="text-right">
                      <div class=" text-success">
                        27 <i class="fa  fa-long-arrow-up"></i>
                      </div>
                      <div class="text-muted">up</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="fa fa-google-plus-circle fa-2x"></i>
                    </td>
                    <td>
                      <h6 class="margin-0">Google +</h6>
                      <span>1k Follows, 228 Likes</span>
                    </td>
                    <td>
                      <h6 class="mb-0">$ 1768</h6>
                      <span class="text-muted">Spent</span>
                    </td>
                    <td class="text-right">
                      <div class=" text-success">
                        27 <i class="fa fa-long-arrow-up"></i>
                      </div>
                      <div class="text-muted">up</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
