<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtSystemStatusResponseMsg extends EtBaseClass
{
    public $Results; // EtResults
    public $OverallStatus; // String
    public $OverallStatusMessage; // String
    public $RequestID; // String
}
