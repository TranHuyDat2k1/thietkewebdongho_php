@extends('_layout_admin')
@section('content')
<!doctype html>
<html lang="en" ng-app = "myapp" ng-controller = "mycontroller">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <button class="btn btn-primary" ng-click="showModal(0)">Create news</button>

    {{-- <table class="table table-bordered">
        <thead>
            <tr>
                <th>TT</th>
                <th>FirstName</th>
                <th>LastName</th>
            </tr>
        </thead>   
            <tr ng-repeat = "nv in datas">
                <td>@{{ $index+1 }}</td>
                <td>@{{ nv.firstName }}</td>
                <td>@{{ nv.lastName }}</td>
            </tr>
        </tbody>
    </table> --}}

    <br>
    <hr>
    <div>Tim kiem: <input type="text" ng-model="timkiem"></div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>TT</th>
                <th>Tên Đơn Hàng</th>
                <th>Số Lượng</th>
                <th>Đơn Giá</th>
                <th>Thành Tiền</th>
                <th>Họ Tên</th>
                <th>SDT</th>
                <th>Địa Chỉ</th>
                <th>Ngày Đặt</th>
                <th>Trạng Thái</th>
            </tr>
        </thead>
        <tbody>
            <tr dir-paginate = "ls in donhangs| filter: timkiem|itemsPerPage:10">
                <td>@{{ $index+1 }}</td>
                <td>@{{ ls.TenDongHo }}</td>
                <td>@{{ ls.SoLuong }}</td>
                <td>@{{ ls.DonGia }}</td>
                <td>@{{ ls.ThanhTien }}</td>
                <td>@{{ ls.HoTen }}</td>
                <td>@{{ ls.SoDienThoai }}</td>
                <td>@{{ ls.DiaChi }}</td>
                <td>@{{ ls.NgayDat }}</td>
                <td>@{{ ls.TrangThai }}</td>
                <td><button class="btn btn-info" ng-click="showModal(ls.id)">Edit</button></td>
                <td><button class="btn btn-danger" ng-click="deleteClick(ls.id)">Edit</button></td>
            </tr>
        </tbody>
    </table>

    <dir-pagination-controls
            boundary-links="true"
            direction-links="true" >
            </dir-pagination-controls>


    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@{{modalTitle}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label for="tendongho">Tên Đồng Hồ</label>
                      <input type="text"
                        class="form-control" id="tendongho" ng-model="donhang.TenDongHo">
                    </div>
                    <div class="form-group">
                        <label for="soluong">Số Lượng</label>
                        <input type="text"
                          class="form-control" id="soluong" ng-model="donhang.SoLuong">
                    </div>
                    <div class="form-group">
                        <label for="dongia">Đơn Giá</label>
                        <input type="text"
                          class="form-control" id="dongia" ng-model="donhang.DonGia">
                    </div>
                    <div class="form-group">
                      <label for="thanhtien">Thành Tiền</label>
                      <input type="text"
                        class="form-control" id="thanhtien" ng-model="donhang.ThanhTien">
                    </div>
                    <div class="form-group">
                        <label for="hoten">Họ Tên</label>
                        <input type="text"
                          class="form-control" id="hoten" ng-model="donhang.HoTen">
                    </div>
                    <div class="form-group">
                        <label for="sdt">SDT</label>
                        <input type="text"
                          class="form-control" id="sdt" ng-model="donhang.SoDienThoai">
                    </div>
                    <div class="form-group">
                      <label for="diachi">Địa Chỉ</label>
                      <input type="text"
                        class="form-control" id="diachi" ng-model="donhang.DiaChi">
                    </div>
                    <div class="form-group">
                        <label for="ngaydat">Ngày Đặt</label>
                        <input type="text"
                          class="form-control" id="ngatdat" ng-model="donhang.NgayDat">
                    </div>
                    <div class="form-group">
                        <label for="trangthai">Trạng Thái</label>
                        <input type="text"
                          class="form-control" id="trangthai" ng-model="donhang.TrangThai">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/angular.min.js">
    </script>
    <script src="/js/dirPagination.js"></script>
    <script>
        var app = angular.module('myapp',['angularUtils.directives.dirPagination']);
        app.controller('mycontroller',function($scope,$http){
            // $scope.datas = JSON.parse('[{ "firstName":"John", "lastName":"Doe" },{ "firstName":"Anna", "lastName":"Smith" }, { "firstName":"Peter", "lastName":"Jones" }]');
            $scope.timkiem="";
            $scope.reloadData = function(){
                    $http(
                    {
                        method: "GET",
                        url: "http://localhost:8000/api/donhangs"
                    }
                ).then(function(response){
                    $scope.donhangs = response.data;
                });
            }
            $scope.reloadData();
            $scope.clickMe = function(){
                alert('ban vua click vao toi!');
            }

            $scope.showModal = function(id){
                $scope.id=id;
                if(id==0){
                    $scope.modalTitle = "Them don hang";
                    if($scope.donhang) delete $scope.donhang;
                }
                else{
                    $scope.modalTitle = "Sua don hang";
                    $http(
                        {
                            method: "GET",
                            url: "http://localhost:8000/api/donhangs/"+id
                        }
                    ).then(function(response){
                        //console.log(response.data);
                        $scope.donhang = response.data;
                    });
}
                $('#modelId').modal('show');
            }
            $scope.saveData = function(){
                if($scope.id==0){
                    $http(
                        {
                            method: "POST",
                            url: "http://localhost:8000/api/donhangs/",
                            data: $scope.donhang,
                            "content-Type": "application/json",
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.donhang = response.data;
                        $scope.reloadData();
                    });
                }
                else{
                    $http(
                        {
                            method: "PUT",
                            url: "http://localhost:8000/api/donhangs/"+$scope.id,
                            data: $scope.donhang,
                            "content-Type": "application/json",
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.donhang = response.data;
                        $scope.reloadData();
                    });
                }
                $('#modelId').modal('hide');
            }

            $scope.deleteClick = function(id){
                var chon = confirm("Ban co muon xoa ban ghi khong?");
                if(chon){
                    $http(
                        {
                            method: "DELETE",
                            url: "http://localhost:8000/api/donhangs/"+id
                        }
                    ).then(function(response){
                        console.log(response.data);
                        $scope.donhang = response.data;
                        $scope.reloadData();
                    });
                }
            }
        });
    </script>
  </body>
</html>
@stop