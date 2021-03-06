<?php

namespace Codexshaper\WooCommerce\Models;

use Codexshaper\WooCommerce\Traits\QueryBuilderTrait;

class Note extends BaseModel
{
    use QueryBuilderTrait;

    protected $endpoint;

    /**
     * Retrieve all Items.
     *
     * @param int   $order_id
     * @param array $options
     *
     * @return array
     */
    protected function all($order_id, $options = [])
    {
        $this->endpoint = "orders/{$order_id}/notes";

        return self::all($options);
    }

    /**
     * Retrieve single Item.
     *
     * @param int   $order_id
     * @param int   $note_id
     * @param array $options
     *
     * @return object
     */
    protected function find($order_id, $note_id, $options = [])
    {
        $this->endpoint = "orders/{$order_id}/notes";

        return self::find($note_id, $options);
    }

    /**
     * Create new Item.
     *
     * @param int   $order_id
     * @param array $data
     *
     * @return object
     */
    protected function create($order_id, $data)
    {
        $this->endpoint = "orders/{$order_id}/notes";

        return self::create($data);
    }

    /**
     * Destroy Item.
     *
     * @param int   $order_id
     * @param int   $note_id
     * @param array $options
     *
     * @return object
     */
    protected function delete($order_id, $note_id, $options = [])
    {
        $this->endpoint = "orders/{$order_id}/notes";

        return self::delete($note_id, $options);
    }

    /**
     * Paginate results.
     *
     * @param int $per_page
     * @param int $current_page
     *
     * @return array
     */
    protected function paginate(
        $order_id,
        $per_page = 10,
        $current_page = 1,
        $options = []
    ) {
        $this->endpoint = "orders/{$order_id}/notes";

        return self::paginate($per_page, $current_page, $options);
    }

    /**
     * Count all results.
     *
     * @return int
     */
    protected function count($order_id)
    {
        $this->endpoint = "orders/{$order_id}/notes";

        return self::count();
    }

    /**
     * Store data.
     *
     * @return array
     */
    public function save($order_id)
    {
        $this->endpoint = "orders/{$order_id}/notes";

        return self::save();
    }
}
