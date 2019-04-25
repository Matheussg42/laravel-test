<?php

namespace App\Repositories\Produto;
use App\Produto;
use DB;

class ProdutoRepository
{

    /**
     * Todos os Produtos
     * 
     * @return produto
     */
    public function all(){
        return Produto::all();
    }

    /**
     * Criar Produto
     * 
     * @param  fields
     * @return produto
     */
    public function create($fields){
        return Produto::create($fields);
    }

    /**
     * Encontra Produto pelo ID
     * 
     * @param  id
     * @return produto
     */
    public function find($id){
        $produto = Produto::find($id);
        if($produto){
            return $produto;
        }else{
            throw new \Exception('Nada Encontrado',-404);
        }
    }

    /**
     * Atualiza Produto
     * 
     * @param  id
     * @param  fields
     * @return produto
     */
    public function update($id,$fields){
        $produto = $this->find($id);
        $produto->update($fields);
        return $produto;
    }

    /**
     * Deleta Produto
     * 
     * @param  id
     * @return produto
     */
    public function destroy($id){
        $produto = $this->find($id);
        $produto->delete();
        return $produto;
    }

}