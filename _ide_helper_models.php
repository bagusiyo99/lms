<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Banksoal
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Banksoal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banksoal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banksoal query()
 */
	class Banksoal extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Kelasujian
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Kelasujian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelasujian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelasujian query()
 */
	class Kelasujian extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Kelompok
 *
 * @method static \Database\Factories\KelompokFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Kelompok newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelompok newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kelompok query()
 */
	class Kelompok extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Siswa
 *
 * @property int $id
 * @property int|null $teacher_id
 * @property string $teacher_status
 * @property string $nama
 * @property string $nisn
 * @property string|null $foto
 * @property string $jurusan
 * @property string $kelas
 * @property string $hp
 * @property string $jk
 * @property string $angkatan
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SiswaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa query()
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereAngkatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereJurusan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereKelas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereNisn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereTeacherStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Siswa whereUserId($value)
 */
	class Siswa extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Soal
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SoalFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Soal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Soal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Soal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Soal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Soal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Soal whereUpdatedAt($value)
 */
	class Soal extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $akses
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAkses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

