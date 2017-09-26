tidal.controller('SlideController', ['$scope', function($scope) {

  $scope.slides = [
    {
      class: "carousel-item active slide-1",
      ref: "#one!",
      image: 'images/slides/Disk_Cover.png',
      imageDivClass: 'col-xl-10 offset-xl-2 col-lg-12 text-xl-right text-center flex-xl-last flex-first',
      imageClass: 'cover',
      title: "Action Bronson's Blue Chips 7000.",
      paragraph: "The long awaited Blue Chips sequel; Blue Chips 7000 is finally here.",
      buttonClass: "col-xl-10 offset-xl-2 col-lg-12 text-xl-left text-center flex-xl-first flex-last",
      button: "LISTEN TO ALBUM"
    },
    {
      class: "carousel-item slide-2",
      ref: "#two!",
      image: 'images/slides/Video_Screenshot.png',
      imageDivClass: 'col-xl-10 offset-xl-2 col-lg-12 text-xl-right text-center flex-xl-last flex-first',
      imageClass: 'screenshot',
      title: "Watch exclusive videos.",
      paragraph: "Watch Action Bronson's new music video Chop Chop Chop on TIDAL.",
      buttonClass: "col-xl-10 offset-xl-2 col-lg-12 text-xl-left text-center flex-xl-first flex-last",
      button: "WATCH VIDEOS"
    },
    {
      class: "carousel-item slide-3",
      ref: "#three!",
      buttonClass: "col-12 text-center",
      button: "BUY TICKETS"
    }
  ]

}]);
