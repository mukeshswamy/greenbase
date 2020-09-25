<?php include('header.php') ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .container {
        /* height: 500px; */
        /* background-color: red; */
    }

    .mt-head {
        padding-top: 8%;
    }

    .pan-head {
        display: block;
        background-color: black;
        color: white;
        width: fit-content;
        font-family: "D-DIN Condensed";
        font-weight: normal;
        font-size: 50px !important;
        padding: 5px 20px;
    }

    * {
        font-family: "D-DIN Condensed";
    }

    .ls {
        letter-spacing: 3px;
    }

    .bg-gray {
        background-color: #808080;
    }

    .map {
        width: 720px;
        margin: 0 auto;
        display: block;

    }

    .map-container {
        overflow: hidden;
    }

    @keyframes zoomin {
        from {
            transform: scale(1);
        }

        to {
            transform: scale(10);
            opacity: 0;
        }
    }

    /* The element to apply the animation to */
    .zoom-in {
        animation-name: zoomin;
        animation-duration: 1s;
    }

    .invisible {
        display: none;
    }

    .circle {
        height: 13px;
        width: 13px;
        display: inline-block;
        background-color: #a1a3a6;
        border-radius: 50%;
        float: right;
        /* margin-top: 2px; */
    }

    .blue {
        background-color: #00bdff;
    }

    /* .bot {
        position: absolute;
        bottom: 0;
        width: 100%;
    } */

    .bot {
        font-size: 20px;
    }

    area::before {
        content: "";
        height: fit-content;
        width: fit-content;
        background-color: red;
    }

    .posrel {
        position: relative;
    }

    .cancont {
        overflow: hidden;
    }

    .zoomButton {
        display: none;
    }

    tspan {
        font-size: 35px;
        color: #00bdff;
    }

    .details {
        position: fixed;
        top: 15%;
        background-color: white;
        right: 30px;
        padding: 15px 20px;
    }

    circle.existing {
        color: #00bdff;
        background-color: #00bdff;
    }

    .details .name {
        color: #00bdff;
        font-size: 25px;

    }

    .details p {
        margin: 0;
        margin-top: 5px;
        text-decoration: capitalize;
    }

    .details p:first-child {
        margin: 0;
        margin-top: 0;
    }

    .details .area {
        color: #808080;
        font-size: 23px;
    }

    .details .getdir {
        color: #000000;
        font-size: 20px;
    }

    .details .detpdf {
        color: #000000;
        font-size: 20px;
    }

    .details a:hover {
        text-decoration: none;
    }

    .downimg {
        width: 15px;
        color: black;
        vertical-align: baseline;
        margin-left: 15px;
    }

    .bordmin {
        width: 60px;
        height: 2px;
        background-color: #00bdff;
        margin-top: 15px;
    }

    #state {
        border: 0;
        outline: 0;
        border-bottom: 1px solid #808080;
        margin-bottom: 15px;
        padding-left: 0;
        font-size: 20px;
    }

    .city {
        border: 0;
        outline: 0;
        margin-bottom: 0;
        border-bottom: 1px solid #808080;
        padding-left: 0;
        font-size: 20px;
    }

    #state:focus,
    #state:hover,
    #state:active {
        outline: 0;
    }

    .districts {
        padding: 10px;
    }

    .districts.active {
        border: 1px solid black;

    }

    .districts a {
        color: #808080;
    }

    .districts a:hover {
        text-decoration: none;
    }

    .subtxt {
        font-size: 20px;
    }
</style>

<!-- Location -->

<div class="row  mx-0">
    <div class="col-md-5 mt-head px-5 ">
        <div class="container pt-5 dfl pb-5">
            <p class="pan-head mt-5">PAN-INDIA</p>
            <p class="pan-head ls">PRESENCE </p>
            <p class="subtxt">
                Greenbase Industrial &amp; Logistics Parks are
                strategically located at key locations pan India, in close
                proximity to commercial, logistical and freight corridors.
            </p>

            <div class="col-9 px-0">
                <select name="state" id="state" class="form-control">
                    <option value="State" disabled selected>State</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Karnataka">Karnataka</option>
                </select>
                <div class="city">City/District</div>
                <div class="districts">
                    <div class=" distcity maharashtra d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Talegaon, Pune</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg" class="downimg"></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Nashik</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg" class="downimg"></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Bhiwandi</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg" class="downimg"></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Panvel</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg" class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity haryana d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Gurugram</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg" class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity tamilnadu d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Oregadam</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg" class="downimg"></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Durgapur</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg" class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="distcity karnataka d-none">
                        <div class="row">
                            <div class="col-6">
                                <p class="name">Bangalore</p>
                            </div>
                            <div class="col-6 text-right">
                                <p><a href="##">E-brochure<img src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg" class="downimg"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bot pt-5 pb-0">
                <p>Existing Industrial & Logistics Parks <span class="circle blue"></span></p>
                <p>Upcoming Industrial & Logistics Parks <span class="circle"></span></p>
            </div>
        </div>
    </div>
    <div class="col-md-7 px-0 mt-head bg-gray">
        <div class="cancont mapcontainer" id="cancot">
            <div class="map"></div>
            <div class="details d-none">
                <p class="name">Gurugram, Haryana</p>
                <p class="area">AREA - <span class="areaval">9,20,300 sq. ft.</span></p>
                <div class="bordmin"></div>
                <p><a class="detpdf" href="#" download>Download E Brochure <img class="downimg" src="<?php echo base_url(); ?>assets/images/black_down_arrow.svg"></a></p>
                <p><a class="getdir" href="#" target="_blank">Get Direction<i class="fa fa-map-marker" style="font-size:18px;margin-left:15px;"></i></a></p>
            </div>
        </div>
    </div>
</div>


<!-- End of Location -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-mapael@2.2.0/js/jquery.mapael.js"></script>
<script src="<?php echo base_url(); ?>assets/js/newind.js"></script>
<script type="text/javascript">
    // object for location details
    var loc = {
        gurugram: {
            name: 'GURUGRAM',
            state: 'HARYANA',
            area: '9,20,300 sq. ft.',
            pdf: '<?php echo base_url(); ?>assets/pdf/gurugram.pdf',
            directions: 'https://www.google.com/maps/place/Greenbase+Industrial+Park+-+Pune/@18.813651,73.6986104,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2b3f3c3f9c46b:0xb60a391bb16d688!8m2!3d18.813651!4d73.7007991'
        },
        panvel: {
            name: 'PANVEL',
            state: 'MAHARASHTRA',
            area: '1,20,300 sq. ft.',
            pdf: '<?php echo base_url(); ?>assets/pdf/panvel.pdf',
            directions: 'https://www.google.com/maps/place/Greenbase+-+Pune/@18.813651,73.6986104,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2b3f3c3f9c46b:0xb60a391bb16d688!8m2!3d18.813651!4d73.7007991'
        },
        nashik: {
            name: 'NASHIK',
            state: 'MAHARASHTRA',
            area: '1,20,300 sq. ft.',
            pdf: '<?php echo base_url(); ?>assets/pdf/nashik.pdf',
            directions: 'https://www.google.com/maps/place/Greenbase+-+Pune/@18.813651,73.6986104,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2b3f3c3f9c46b:0xb60a391bb16d688!8m2!3d18.813651!4d73.7007991'
        },
        talegaon: {
            name: 'TALEGAON',
            state: 'MAHARASHTRA',
            area: '1,20,300 sq. ft.',
            pdf: '<?php echo base_url(); ?>assets/pdf/talegaon.pdf',
            directions: 'https://www.google.com/maps/place/Greenbase+-+Pune/@18.813651,73.6986104,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2b3f3c3f9c46b:0xb60a391bb16d688!8m2!3d18.813651!4d73.7007991'
        },
        bhiwandi: {
            name: 'BHIWANDI',
            state: 'MAHARASHTRA',
            area: '1,20,300 sq. ft.',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            directions: 'https://www.google.com/maps/place/Greenbase+-+Pune/@18.813651,73.6986104,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2b3f3c3f9c46b:0xb60a391bb16d688!8m2!3d18.813651!4d73.7007991'
        },
        bangalore: {
            name: 'BANGALORE',
            state: 'KARNATAKA',
            area: '1,20,300 sq. ft.',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            directions: 'https://www.google.com/maps/place/Greenbase+-+Pune/@18.813651,73.6986104,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2b3f3c3f9c46b:0xb60a391bb16d688!8m2!3d18.813651!4d73.7007991'
        },
        oragadam: {
            name: 'ORAGADAM',
            state: 'TAMIL NADU',
            area: '1,20,300 sq. ft.',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            directions: 'https://www.google.com/maps/place/Greenbase+-+Pune/@18.813651,73.6986104,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2b3f3c3f9c46b:0xb60a391bb16d688!8m2!3d18.813651!4d73.7007991'
        },
        durgapur: {
            name: 'DURGAPUR',
            state: 'TAMIL NADU',
            area: '1,20,300 sq. ft.',
            pdf: '<?php echo base_url(); ?>assets/pdf/bhiwandi.pdf',
            directions: 'https://www.google.com/maps/place/Greenbase+-+Pune/@18.813651,73.6986104,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2b3f3c3f9c46b:0xb60a391bb16d688!8m2!3d18.813651!4d73.7007991'
        }
    }
    // map creator
    $map = $(".mapcontainer");
    $map.mapael({
        map: {
            name: "india_states",
            zoom: {
                enabled: true,
                minLevel: -0.3
            },
            defaultPlot: {
                size: 30,
                attrs: {
                    fill: "#808080"
                },
                attrsHover: {
                    fill: "#808080"
                },
                text: {
                    fill: "#808080"
                }
            },
            defaultArea: {
                attrs: {
                    fill: "#000031",
                    opacity: 1,
                    stroke: "#002e6f",
                    "stroke-width": 2,
                    opacity: 1
                },
                attrsHover: {
                    fill: "#000055"
                }
            }
        },
        plots: {
            'gurugram': {
                cssClass: "plt gurugram",
                type: "circle",
                size: 30,
                latitude: 28.3,
                longitude: 77.5,
                text: {
                    content: "Gurugram"
                }
            },
            'panvel': {
                cssClass: "plt panvel",
                type: "circle",
                size: 30,
                latitude: 18.5,
                longitude: 73.2,
                text: {
                    content: "Panvel",
                    position: "left"
                }
            },
            'nashik': {
                cssClass: "plt nashik existing",
                type: "circle",
                size: 30,
                latitude: 19.3,
                longitude: 74.2,

                text: {
                    content: "Nashik"
                }
            },
            'bhiwandi': {
                cssClass: "plt bhiwandi existing",
                type: "circle",
                size: 30,
                latitude: 19.1,
                longitude: 73.2,
                text: {
                    content: "Bhiwandi",
                    position: 'left'
                }
            },
            'talegaon': {
                cssClass: "plt talegaon existing",
                type: "circle",
                size: 30,
                latitude: 18.5,
                longitude: 73.9,
                text: {
                    content: "Talegaon",
                    // position: "bottom",
                }
            },
            'bangalore': {
                cssClass: "plt bangalore",
                type: "circle",
                size: 30,
                latitude: 13,
                longitude: 76.9,
                text: {
                    content: "Bangalore",
                    position: "top",
                }
            },
            'oragadam': {
                cssClass: "plt orgadam existing",
                type: "circle",
                size: 30,
                latitude: 13,
                longitude: 80.1,
                text: {
                    content: "Oragadam",
                    // position: "top",
                }
            },
            'durgapur': {
                cssClass: "plt durgapur existing",
                type: "circle",
                size: 30,
                latitude: 11,
                longitude: 76.9,
                text: {
                    content: "Durgapur",
                    position: "bottom",
                }
            }
        },

    });
    $(document).ready(() => {
        $("circle.existing").attr('fill', '#00bdff');
        // if($('text').attr('data-id')=='nashik'){
        //     $(this).attr('x','300');
        //     cos
        // }
    });
    $(".plt").click(function() {
        // console.log('hi');
        var x = $(this).attr('data-id');
        $('.details').removeClass('d-none');
        console.log('hi')
        console.log(loc[x]);
        $('.details > .name').text(loc[x].name + ' , ' + loc[x].state);
        $('.areaval').text(loc[x].area);
        $(".detpdf").attr('href', loc[x].pdf);
        $(".getdir").attr('href', loc[x].directions);
        $("circle.existing").attr('fill', '#00bdff');
    });
    $("path").click(function() {
        // console.log('hi');
        $('.details').addClass('d-none');
        $("circle.existing").attr('fill', '#00bdff');
    });
    // these are here just to keep the existing ones blue
    $("path").mouseenter(function() {
        $("circle.existing").attr('fill', '#00bdff');
    });
    $("path").mouseleave(function() {
        $("circle.existing").attr('fill', '#00bdff');
    });
    $("path").mousemove(function() {
        $("circle.existing").attr('fill', '#00bdff');
    });
    $('circle.existing').mouseover(function() {
        $("circle.existing").attr('fill', '#00bdff');
    });
    $('circle.existing').mouseleave(function() {
        $("circle.existing").attr('fill', '#00bdff');
    });

    // on select change
    $('#state').on('change', function() {
        var state = this.value;
        // console.log(state);
        // $(".map").addClass('zoom-in');
        // setTimeout(() => {
        //     $(".map").addClass('invisible');
        //     $('.' + state).removeClass('invisible');
        // }, 1000);
        if (state == "Maharashtra") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 16,
                longitude: 63
            });
            $('.distcity').addClass('d-none');
            $('.maharashtra').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Haryana") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 28,
                longitude: 80
            });
            $('.distcity').addClass('d-none');
            $('.haryana').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Tamil Nadu") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 10,
                longitude: 80
            });
            $('.distcity').addClass('d-none');
            $('.tamilnadu').removeClass('d-none');
            $('.districts').addClass('active');
        } else if (state == "Karnataka") {
            $map.trigger('zoom', {
                level: 5,
                latitude: 10,
                longitude: 80
            });
            $('.distcity').addClass('d-none');
            $('.karnataka').removeClass('d-none');
            $('.districts').addClass('active');
        } else {

        }



    });
</script>

<?php include('footer.php') ?>