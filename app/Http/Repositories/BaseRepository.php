<?php namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use App\Http\Repositories\Interfaces\{InterfaceRepository};

/**
 * @property Model table
 */
class BaseRepository implements InterfaceRepository
{
    /**
     * @var Model table
     */
    protected $table;

    public function __construct(Model $model)
    {
        $this->table = $model;
    }

    public function all(): Collection
    {
        // TODO: Implement all() method.
        return $this->table->all();
    }

    public function create(array $data, array $attributes): ?Model
    {
        // TODO: Implement create() method.
        return $this->table->updateOrCreate($data,$attributes);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function find($id): ?Model
    {
        // TODO: Implement find() method.
        return $this->table->find($id);
    }

    public function filterIn(string $field, array $data): ?Collection
    {
        // TODO: Implement filterIn() method.
        return $this->table->whereIn($field, $data)->get();
    }

    public function first(array $attributes): ?Model
    {
        // TODO: Implement filterIn() method.
        return $this->table->firstWhere($attributes);
    }

    public function filters(array $data): Collection
    {
        // TODO: Implement filters() method.
        return $this->table->where($data)->get();
    }

}