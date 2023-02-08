<?php

namespace App\Http\Controllers;

use App\Enums\LetterType;
use App\Models\Classification;
use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLetterRequest;
use App\Http\Requests\UpdateLetterRequest;
use App\Models\Attachment;
use App\Models\Config;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Rule;

class ServicesLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {
        return view('pages.transaction.services.index', [
            'data' => Letter::services()->render($request->search),
            'search' => $request->search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.transaction.services.create', [
            'classifications' => Classification::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $user = auth()->user();
            if ($request->type != LetterType::SERVICES->type()) throw new \Exception(__('menu.transaction.services_letter'));
            $newLetter = $request->validate(
                [
                    "type" => "required",
                    "reference_number" => 'required',
                    "classification_code" => "required",
                    "letter_date" => "required",
                    "sign_name" => "required",
                    "sign_id" => "required",
                    "sign_position" => "required",
                    "sign_rank" => "required",
                    "explain_name" => "required",
                    "explain_nik" => "required",
                    "explain_place_and_date_of_birth" => "required",
                    "explain_religion" => "required",
                    "explain_job" => "required",
                    "explain_address" => "required",
                    "explain_martial_status" => "required",
                    "explain_country" => "required",
                    "description" => "required",
                ]
            );
            $newLetter['user_id'] = $user->id;
            Letter::create($newLetter);
            return redirect()
                ->route('transaction.services.index')
                ->with('success', __('menu.general.success'));
        } catch (\Throwable $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function show(Letter $letter)
    {
        //
    }

    /**
     * Print the specified resource.
     *
     * @param Letter $services
     * @return View
     */
    public function print(Letter $service): View
    {
        $descist = explode(PHP_EOL, $service->description);
        return view('pages.transaction.services.print', [
            'data' => $service,
            'description' => $descist,
            'classifications' => Classification::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Letter $services
     * @return View
     */
    public function edit(Request $request, Letter $service): View
    {
        if ($request->has('sign')) {
            return view('pages.transaction.services.sign', [
                'data' => $service,
                'classifications' => Classification::all(),
            ]);
        }
        return view('pages.transaction.services.edit', [
            'data' => $service,
            'classifications' => Classification::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Letter $services)
    {
        try {
            $updated = Letter::find($request->id);
            if ($request->has('sign')) {
                $data = $request->validate(
                    [
                        'agenda_number' => ['required'],
                        'to' => ['required'],
                        'reference_number' => ['required'],
                        'letter_date' => ['required'],
                        'description' => ['required'],
                        'note' => ['nullable'],
                        'classification_code' => ['required'],
                    ]
                );
                $data['type'] = LetterType::OUTGOING->type();
                $updated->update($data);
                if ($request->hasFile('attachments')) {

                    foreach ($request->attachments as $attachment) {
                        $extension = $attachment->getClientOriginalExtension();
                        if (!in_array($extension, ['png', 'jpg', 'jpeg', 'pdf'])) continue;
                        $filename = time() . '-' . $attachment->getClientOriginalName();
                        $filename = str_replace(' ', '-', $filename);
                        $attachment->storeAs('public/attachments', $filename);
                        Attachment::create([
                            'filename' => $filename,
                            'extension' => $extension,
                            'user_id' => auth()->user()->id,
                            'letter_id' => $request->id,
                        ]);
                    }
                    return redirect()
                        ->route('transaction.services.index')
                        ->with('success', __('menu.general.success'));
                }
            } else {
                $services->update($request->validate(
                    [
                        "type" => "required",
                        "reference_number" => 'required',
                        "classification_code" => "required",
                        "letter_date" => "required",
                        "sign_name" => "required",
                        "sign_id" => "required",
                        "sign_position" => "required",
                        "sign_rank" => "required",
                        "explain_name" => "required",
                        "explain_nik" => "required",
                        "explain_place_and_date_of_birth" => "required",
                        "explain_religion" => "required",
                        "explain_job" => "required",
                        "explain_address" => "required",
                        "explain_martial_status" => "required",
                        "explain_country" => "required",
                        "description" => "required",
                    ]
                ));

                return redirect()
                    ->route('transaction.services.index')
                    ->with('success', __('menu.general.success'));
            }
        } catch (\Throwable $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Letter  $letter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Letter $service)
    {
        try {
            $service->delete();
            return redirect()
                ->route('transaction.services.index')
                ->with('success', __('menu.general.success'));
        } catch (\Throwable $exception) {
            return back()->with('error', $exception->getMessage());
        }
    }
}
