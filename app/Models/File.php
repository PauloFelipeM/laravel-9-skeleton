<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

/**
 * App\Models\File
 *
 * @property-read mixed $file_url
 * @method static \Illuminate\Database\Eloquent\Builder|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File query()
 * @mixin \Eloquent
 */
class File extends Model
{
    use QueryCacheable;

    protected $fillable = ['originalfilename', 'storagefilename', 'mime', 'relation', 'relation_id'];

    protected $cacheFor = 3600;

    protected static $flushCacheOnUpdate = true;

    protected $appends = [
        'urls',
    ];

    protected $casts = [
        'id' => 'integer',
        'originalfilename' => 'string',
        'storagefilename' => 'string',
        'mime' => 'string',
    ];

    protected $hidden = [
        'relation',
        'relation_id',
    ];

    public function getUrlsAttribute(): array
    {
        $sizes = [75, 100, 125];
        $relation = $this->attributes['relation'];
        $relationId = $this->attributes['relation_id'];
        $path = env('APP_URL') . "/api/files/{$relation}/{$relationId}/";
        $urls = ['original' => $path . $this->storagefilename];

        foreach ($sizes as $size) {
            $urls["{$size}x{$size}"] = "{$path}thumbnail_{$size}x{$size}_" . $this->storagefilename;
        }

        return $urls;
    }
}
