<?php

namespace App\Services;

use App\User;

/**
 * Helps to calculate the routes for the application.
 *
 * @author Luis Preza.
 * @version 1.0.0
 */
class RoutesService
{
    protected $users;
    protected $routes = [];
    protected $coordinates;

    /**
     * Create a new service instance.
     * @param User $users Users that can be drivers.
     *
     * @return void
     */
    public function __construct(User $users)
    {
        $this->users = $users;
    }
    
    public function isClose($coordinates, $point, $kmClose = 1) {
        $earth_radius = 6371; // earth radius in kilometers
        $lat_point = deg2rad($point['lat']);
        $lng_point = deg2rad($point['lng']);

        foreach ($coordinates as $coord) {
            $lat_coord = deg2rad($coord['lat']);
            $lng_coord = deg2rad($coord['lng']);

            $dlat = $lat_coord - $lat_point;
            $dlong = $lng_coord - $lng_point;

            $a = (sin($dlat/2) * sin($dlat/2)) + cos($lat_point) * cos($lat_coord) * (sin($dlong/2) * sin($dlong/2));
            $c = 2 * atan2(sqrt($a), sqrt(1-$a));
            $d = $radio_tierra * $c;

            if ($d <= $kmClose) {
                return true;
            }
        }
        return false;
    }

    public function getRoutes($coordinates, $point) {
        $allUsers = User::all();
        // firs foreach has the drivers
        foreach($this->users as $user) {
            // second foreach has the passengers
            foreach($allUsers as $user2) {
                if($this->isClose($user->routeCoordinates, $user2->coordinates)) {
                    $this->routes[$user->id][] = $user2->id;
                }
            }
        }
        return $this->routes;
    }
}
