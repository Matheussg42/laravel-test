<?php

namespace App\Repositories\Estoque;
use App\Estoque;
use DB;

class EstoqueRepository
{

    /**
     * Todas as Estoques
     * 
     * @return estoques
     */
    public function all(){
        return Estoque::all();
    }

    /**
     * Criar novo Estoque
     * 
     * @param  fields
     * @return estoque
     */
    public function create($fields){
        return Estoque::create($fields);
    }

    /**
     * Encontra Estoque pelo Id
     * 
     * @param  id
     * @return estoque
     */
    public function find($id){
        $estoque = Estoque::find($id);
        if($estoque){
            return $estoque;
        }else{
            throw new \Exception('Nada Encontrado',-404);
        }
    }

    /**
     * Busca por qualquer coluna
     * 
     * @param  column
     * @param  value
     * @return estoque
     */
    public function findBy($column,$value){ 
        $estoque = Estoque::where($column,$value)->get();
        if($estoque){
            return $estoque;
        }else{
            throw new \Exception('Nada Encontrado',-404);
        }
    }

    /**
     * Atualiza Estoque
     * 
     * @param  id
     * @param  fields
     * @return estoque
     */
    public function update($id,$fields){
        $estoque = $this->find($id);
        $estoque->update($fields);
        return $estoque;
    }

    /**
     * Deleta Estoque
     * 
     * @param  id
     * @return estoque
     */
    public function destroy($id){
        $estoque = $this->find($id);
        $estoque->delete();
        return $estoque;
    }

}