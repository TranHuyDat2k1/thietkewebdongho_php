var app = angular.module('myapp', ['ui.bootstrap']);
app.controller('customercontroller', function($scope, $http, $rootScope) { //tao 1 controller
    var queryString = window.location.search;
    var url_param = new URLSearchParams(queryString);
    $scope.currentPage = 1;
    $scope.itemsPerPage = 12;
    $scope.sortBy = function(column) {
        $scope.sortColumn = column;
        $scope.reverse = !$scope.reverse;
    };
    //tao bien tim kiem
    $scope.timkiem = "";

    if (!url_param.get('ml') && !url_param.get('mh'))

    //all san pham
        $http({
        method: "GET",
        url: "http://localhost:8000/api/sanphamNBs"
    }).then(function(response) {
        $scope.sanpham = response.data;
    });

    //Tim kiem
    if (url_param.get('s')) {
        $scope.search = url_param.get('s');
    }

    $scope.hello = 'Toi la angular';
    $scope.addToCart = (i) => {
        const list = JSON.parse(localStorage.getItem('cart')) || [];
        if (list.length > 0) {
            let check = false;
            list.forEach(i => {
                if (i.product_id == i.id) {
                    i.quantity++;
                    check = true;
                }

            })
            if (!check)
                list.push({
                    product_id: i.id,
                    product_name: i.TenDongHo,
                    quantity: 1,
                    image: i.HinhAnh,
                    price: i.Gia,
                });
        } else {
            list.push({
                product_id: i.id,
                product_name: i.TenDongHo,
                quantity: 1,
                image: i.HinhAnh,
                price: i.Gia,
            });
        }

        localStorage.setItem('cart', JSON.stringify(list));
    }
});

app.controller('detailcontroller', function($scope, $http, $rootScope) { //tao 1 controller
    $scope.hello = 'Toi la angular';
    var queryString = window.location.search;
    var url_param = new URLSearchParams(queryString);
    $scope.id = url_param.get('id');
    //lay ve chi tiet sp
    $http({
        method: "GET",
        url: "http://localhost:8000/api/chitietsp/" + $scope.id
    }).then(function(response) {
        $scope.s = response.data;
    });

    //xu ly ben gio hang
    $scope.cart = JSON.parse(localStorage.getItem('cart')) || [];
    $scope.total = 0;

    $scope.changedQuantity = (check, index) => {
        if (check == 1) {
            $scope.cart[index].quantity++;
        } else {
            if ($scope.cart[index].quantity > 1)
                $scope.cart[index].quantity--;
        }
        $scope.countTotal();
        setLocal('cart', $scope.cart);
    }

    $scope.countTotal = () => {
        $scope.total = 0;
        $scope.total = $scope.cart.reduce((prev, curr) => prev + Number.parseInt(curr.quantity) * curr.price, $scope.total);
    }
    $scope.countTotal();


    const setLocal = (name, item) => {
        localStorage.setItem(name, JSON.stringify(item));
    }

    $scope.remove = (index) => {
        $scope.cart.splice(index, 1);
        $scope.countTotal();
        setLocal('cart', $scope.cart);
    }

    //them vao gio hang
    $scope.addToCart = (s) => {
        const list = JSON.parse(localStorage.getItem('cart')) || [];
        if (list.length > 0) {
            let check = false;
            list.forEach(i => {
                if (i.product_id == s.id) {
                    9
                    i.quantity++;
                    check = true;
                }

            })
            if (!check)
                list.push({
                    product_id: s.id,
                    product_name: s.TenDongHo,
                    quantity: 1,
                    image: s.HinhAnh,
                    price: s.Gia,
                });
        } else {
            list.push({
                product_id: s.id,
                product_name: s.TenDongHo,
                quantity: 1,
                image: s.HinhAnh,
                price: s.Gia,
            });
        }

        localStorage.setItem('cart', JSON.stringify(list));
    }

    //tien hanh dat hang

});