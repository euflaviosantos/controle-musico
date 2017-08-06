<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Evento extends Model
{
    protected $fillable = ['user_id', 'data', 'hora','descricao'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $appends = ['dia', 'mes', 'ano'];

    public function getDataAttribute($value){
        $data = new Carbon($value);
        $data = $data->format('d/m/Y');
        return $data;
    }

    public function getDiaAttribute(){
        return substr($this->data, 0,2);
    }

    public function getMesAttribute(){
        return substr($this->data, 3,2);
    }

    public function getAnoAttribute(){
        return substr($this->data, 6,4);
    }
    public function getSemanaAttribute(){
        $semana = array(
            0 => 'Domingo',
            1 => 'Segunda',
            2 => 'Terça',
            3 => 'Quarta',
            4 => 'Quinta',
            5 => 'Sexta',
            6 => 'Sábado',
        );
        return $semana[date('w', strtotime($this->ano . '-' . $this->mes . '-' . $this->dia))];
    }

     public function setDataAttribute($value){
         $value = str_replace(['/', ','],'-', $value);
         $data = new Carbon($value);
         $data = $data->format('Y-m-d');
        
         $this->attributes['data'] = $data;
     }

    public function getHoraAttribute($value){
        $hora = substr($value, 0, 5);
        return $hora;
    }

    public function setHoraAttribute($value){
        $value = str_replace(',', ':', $value);
        $value.= ':00';
        $this->attributes['hora'] = $value;
    }

    public static function proximos($quant){
        return Evento::where('data', '>', date('y-m-d'))->orderby('data')->limit($quant)->get();
    }
}
