<?php namespace App\Http\Repositories\Interfaces;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface InterfaceRepository
{
    public function all(): Collection;

    public function create(array $data, array $attributes): ?Model;

    public function update(array $data, $id);

    public function delete($id);

    public function find($id);

    public function filterIn(string $field, array $data): ?Collection;

    public function first(array $attributes): ?Model;

    public function filters(array $data): Collection;

}