<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Map Location') }}
        </h2>
    </x-slot>

    <div class="content m-8">
        <div class="py-12 columns-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{-- TEMPAT MAP --}}
                <div id='map' style='width: 600px; height: 400px;'></div>
            </div>

            <div class="box-border border p-4 bg-white">
                <h1 class="text-2xl mb-3">LATLONG</h1>
                <form action="">
                    <div class="gap-y-4">
                        <div class="flex flex-row gap-4 justify-start items-center m-2">
                            <div class="basis-1/4">
                                <label for="lat">Latitude</label>
                            </div>
                            <input wire:model="lat" type="text" name="lat" id="lat"
                                class="form-input px-4 py-3 rounded">
                        </div>
                        <div class="flex flex-row gap-4 justify-start items-center m-2">
                            <div class="basis-1/4">
                                <label for="long">Longtitude</label>
                            </div>
                            <input wire:model="long" type="text" name="long" id="long"
                                class="form-input px-4 py-3 rounded">
                        </div>
                        <div class="flex flex-row gap-4 justify-start items-center m-2">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', () => {
            // KEY DARI MAPBOX
            mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
            // LOADING MAP
            const map = new mapboxgl.Map({
                container: 'map', // container ID
                style: 'mapbox://styles/mapbox/satellite-streets-v12', // style URL
                center: [113.67442, -7.06335], // starting position [lng, lat]
                zoom: 16, // starting zoom
            });

            const locations = {
                "type": "FeatureCollection",
                "features": [{
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "113.6738513716897",
                                "-7.062657917652686"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "Mantap",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 30,
                            "title": "Hello new",
                            "image": "1a1eb1e4106fff0cc3467873f0f39cab.jpeg",
                            "description": "Mantap"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "113.67482769577083",
                                "-7.065106819766925"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "oke mantap Edit",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 29,
                            "title": "Rumah saya Edit",
                            "image": "0ea59991df2cb96b4df6e32307ea20ff.png",
                            "description": "oke mantap Edit"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "106.62490035406",
                                "-6.3266855038639"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "Update Baru",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 22,
                            "title": "Update Baru Gambar",
                            "image": "d09444b68d8b72daa324f97c999c2301.jpeg",
                            "description": "Update Baru"
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "106.72391468711",
                                "-6.3934163494543"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 19,
                            "title": "awdwad",
                            "image": "f0b88ffd980a764b9fca60d853b300ff.png",
                            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "106.67224158205",
                                "-6.3884963990263"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 18,
                            "title": "adwawd",
                            "image": "4c35cb1b76af09e6205f94024e093fe6.jpeg",
                            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                        }
                    },
                    {
                        "type": "Feature",
                        "geometry": {
                            "coordinates": [
                                "106.74495523289",
                                "-6.3642034511073"
                            ],
                            "type": "Point"
                        },
                        "properties": {
                            "message": "awdwad",
                            "iconSize": [
                                50,
                                50
                            ],
                            "locationId": 12,
                            "title": "adawd",
                            "image": "7c8c949fd0499eb50cb33787d680778c.jpeg",
                            "description": "awdwad"
                        }
                    }
                ]
            }
            // YANG MENENTUKAN MARKER
            const loadLocations = () => {
                locations.features.forEach((location) => {
                    const {
                        geometry,
                        properties
                    } = location;
                    const {
                        iconSize,
                        locationId,
                        title,
                        image,
                        description
                    } = properties;

                    let markerElement = document.createElement('div');
                    markerElement.className = 'marker' + locationId;
                    markerElement.id = locationId;
                    markerElement.style.backgroundImage =
                        'url(https://e7.pngegg.com/pngimages/103/468/png-clipart-computer-icons-craft-pizza-beer-map-marker-map-circle-thumbnail.png)';
                    markerElement.style.backgroundSize = 'cover';
                    markerElement.style.width = '50px'
                    markerElement.style.height = '50px'

                    new mapboxgl.Marker(markerElement).setLngLat(geometry.coordinates).addTo(map)
                })
            }
            // MARKER DI LOAD
            loadLocations()
            // SETTING NAVIGASI
            map.addControl(new mapboxgl.NavigationControl())
            // MENGAMBIL LOKASI LATITUDE LONGTITUDE
            map.on('click', (e) => {
                const long = e.lngLat.lng;
                const lat = e.lngLat.lat;
                // console.log(`latitude: ${lat} dan longtitude: ${long}`);

                @this.long = long;
                @this.lat = lat;
            });

        });
    </script>
@endpush
