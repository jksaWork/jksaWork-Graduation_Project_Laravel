import { Loader } from "@googlemaps/js-api-loader";
import axios from "axios";
import { forEach } from "lodash";
let map;

const loader = new Loader({
    apiKey: "AIzaSyClrFqfOqOGTSGWpiZby6POa-AEFjGmJoM",
    version: "weekly",
    // ...additionalOptions,
});

const myStyles = [
    {
        featureType: "poi",
        elementType: "labels",
        stylers: [
            { visibility: "off" }
        ]
    }
];
let markers, drivers;
let axiosUrl, url = "/offer-in-map",
    suburl = '/owners/owner-map';
if (!document.location.toString().includes('owner')) axiosUrl = url;
else axiosUrl = suburl;
axios
    .get(axiosUrl)
    .then((res) => {
        document.querySelector('.loader_full').classList.add('fade_linear');
        setTimeout(() => {
            document.querySelector('.loader_full').remove();
        }, 2000);
        markers = res.data.markers;
        // drivers = res.data.drivers;
        console.log(markers);
        initMap();
    })
    .catch((err) => console.log(err));
function initMap() {
    loader.load().then(() => {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 15.5988898, lng: 32.525959 },
            zoom: 15,
            mapTypeId: "terrain",
            styles: myStyles,
        });
        map.setTilt(45);
        AppendOrderMarker();
        // AppendDriverMarker();
    });

    function takeCamaraTolaocation(gotomarker, type = null) {
        if (type == 'driver') {
            map.setCenter({
                lat: Number(drivers[gotomarker].location.drvier_lat),
                lng: Number(drivers[gotomarker].location.drvier_long),
            });
        } else {
            map.setCenter({
                lat: Number(markers[gotomarker].latitude),
                lng: Number(markers[gotomarker].longitude),
            });
        }
        StaticContent = `<div class="row jksaClass" style="justify-content:space-between ; width:200px; padding:5px ;margin: 0 30px 0 0 ">
                                <div class="order_container" >
                                    <span>${markers[gotomarker].location
            }</span>
                                </div>
                                <div class="col-xs-1">
                                    <a href='show-order/${markers[gotomarker].id
            }' class="badge  badge-info"> عرض البيانات</a>
                                </div>
                                <table class="table mt-1">
                                    <tbody>
                                        <tr>
                                            <td style='padding:2px'>{{ __('translation.order_id') }} </td>
                                            <td style='padding:2px'> ${markers[gotomarker].id ?? " "
            } </td>
                                        </tr>
                                        <tr>
                                            <td style='padding:2px'> الموقع </td>
                                            <td style='padding:2px'> ${markers[gotomarker].location
                ?.name ?? " "
            } </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> `;
        const infowindow = new google.maps.InfoWindow({
            // content: contentString,
            content: StaticContent,
        });
        marker = new google.maps.Marker({
            // icon:{ url: IconURl } ,
            position: {
                lat: Number(markers[gotomarker].lat),
                lng: Number(markers[gotomarker].long),
            },
            map: map,
            //  id: orderdata[i].id,
        });
        infowindow.open({
            anchor: marker,
            map,
            shouldFocus: false,
        });
    }

    window.takeCamaraTolaocation = takeCamaraTolaocation;
}
function AppendOrderMarker() {
    markers.forEach((markerInForeach) => {
        // console.log(markerInForeach.driver?.fullname);
        const DaynamicContent = `<div class="row jksaClass" style="justify-content:space-between ; width:200px; padding:5px ;margin: 0 30px 0 0 ">
                                <div class="order_container" >
                                    <span>${markerInForeach.title
            }</span>
                                </div>
                                <div class="col-xs-1">
                                    <a href='offers/${markerInForeach.id
            }' class="badge  badge-info"> عرض البيانات</a>
                                </div>
                                <table class="table mt-1">
                                    <tbody>
                                        <tr>
                                            <td style='padding:2px'>رقم الطلب </td>
                                            <td style='padding:2px'> ${markerInForeach.id ?? " "
            } </td>
                                        </tr>
                                        <tr>
                                            <td style='padding:2px'> الموقع </td>
                                            <td style='padding:2px'> ${markerInForeach.location ??
            " - "
            } </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>`;
        const infowindow = new google.maps.InfoWindow({
            // content: contentString,
            content: DaynamicContent,
        });
        const icon = {
            url: "http://wasel.gulfsmo.net/vehicle/%D9%84%D9%88%D9%83%D9%8A%D8%B4%D9%86%202.png",
            scaledSize: new google.maps.Size(50, 50), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };
        // console.log(mark.latitude , mark.longitude)
        const marker = new google.maps.Marker({
            position: {
                lat: parseFloat(markerInForeach.lat),
                lng: parseFloat(markerInForeach.long),
                title: "mohammed altignai",
            },
            map: map,
        });

        marker.addListener("click", (e) => {
            infowindow.open({
                anchor: marker,
                map,
                shouldFocus: false,
            });
        });
    });
}

function AppendDriverMarker() {

    drivers.forEach((markerInForeach) => {
        console.log(markerInForeach);
        const DaynamicContent = `<div class="row jksaClass" style="justify-content:space-between ; width:200px; padding:5px ;margin: 0 30px 0 0 ">
                                <div class="order_container" >
                                    <span>${'(' + markerInForeach.id + ')' + '  ' + markerInForeach.fullname
            }</span>
                                </div>
                                <div class="col-xs-1">

                                </div>
                                <table class="table mt-1">
                                    <tbody>
                                        <tr>
                                            <td style='padding:2px'>  نوع الوقود</td>
                                            <td style='padding:2px'> ${(markerInForeach.fule_type == 'gasoline' ? 'جازولين' : 'بنزين') ??
            " - "
            } </td>
                                        </tr>
                                        <tr>
                                            <td style='padding:2px'> كميه الوقود </td>
                                            <td style='padding:2px'> ${markerInForeach.current_fule_capacity ??
            " - "
            } </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>`;
        const infowindow = new google.maps.InfoWindow({
            // content: contentString,
            content: DaynamicContent,
        });

        const icon = {
            url: "http://wasel.gulfsmo.net/vehicle/%D9%84%D9%88%D9%83%D9%8A%D8%B4%D9%86%20(2).png", //"http://wasel.gulfsmo.net/vehicle/%D9%84%D9%88%D9%83%D9%8A%D8%B4%D9%86%202.png",
            // Driver Icon http://wasel.gulfsmo.net/vehicle/%D9%84%D9%88%D9%83%D9%8A%D8%B4%D9%86%20(2).png
            // url
            scaledSize: new google.maps.Size(50, 50), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };
        const marker = new google.maps.Marker({
            position: {
                lat: parseFloat(markerInForeach.location.drvier_lat),
                lng: parseFloat(markerInForeach.location.drvier_long),
                title: "mohammed altignai",
            },
            icon: icon,
            map: map,
        });
        //  Add Tool Tip To Driver
        marker.addListener("click", (e) => {
            infowindow.open({
                anchor: marker,
                map,
                shouldFocus: false,
            });
        });
    });
}
