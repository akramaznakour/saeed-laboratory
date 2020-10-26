<?php

namespace App\Http\Controllers;

use App\Axe;
use App\Equipment;
use App\Event;
use App\Info;
use App\Member;
use App\project;
use App\Publication;
use App\Welcome;



class EnPagesController extends Controller
{
    /* En welcome page  */

    public function WelcomeIndex()
    {
        $choix=0;

        $listwelcome = welcome::all();

        return view('en.welcomes.index', compact('listwelcome','choix'));
    }

    /* En Axes page  */

    public function AxeIndex()
    {
        $choix=1;

        $listaxe = axe::all();

        return view('en.axes.index', compact('listaxe','choix'));

    }

    /* En Members page  */

    public function MemberIndex()
    {
        $choix=2;
        $listmember =  member::orderBy('Nom')->get();


        return view('en.members.index', compact('listmember','choix'));
    }

    public function MemberShow($id)

    {
        $choix=2;
        $member = member::find($id);

        return view('en.members.cv', compact('member','choix'));
    }

    /* En Projects page  */

    public function ProjectIndex()
    {
        $choix=3;
        $listproject = project::all();

        return view('en.projects.index', compact('listproject','choix'));
    }

    public function ProjectShow($id)
    {
        $choix=3;
        $project = project::find($id);
        return view('en.projects.project', compact('project','choix'));
    }

    /* En Events page  */

    public function EventIndex()
    {
        $choix=4;
        $listevent = event::orderBy('Date','dsc')->get();

        return view('en.events.index', compact('listevent','choix'));
    }

    public function EventShow($id)
    {
        $choix=4;
        $event = event::find($id);
        return view('en.events.event', compact('event','choix'));
    }

    /* En Equipment page  */

    public function EquipmentIndex()
    {
        $choix=5;
        $listEquipment = Equipment::all();

        return view('en.equipments.index', compact('listEquipment','choix'));
    }
    /* En Publication page  */

    public function PublicationShow($id)
    {
        $choix=6;
        $publication = publication::find($id);
        return view('en.publications.publication', compact('publication','choix'));
    }

    public function PublicationIndex()
    {
        $choix=6;
        $listpublication = publication::orderBy('Annee','dsc')->get();

        return view('en.publications.index', compact('listpublication','choix'));
    }

    /* En Contact page  */

    public function InfoIndex()
    {
        $choix=7;
        $listinfo = info::all();

        return view('en.infos.index', compact('listinfo','choix'));
    }


}
