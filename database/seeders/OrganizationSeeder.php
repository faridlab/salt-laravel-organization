<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indITid = Str::uuid()->toString();
        $industries = [
            ["id" => $indITid, "name" => "Information Technology and Services"],
            ["id" => Str::uuid()->toString(), "name" => "Hospital & Health Care"],
            ["id" => Str::uuid()->toString(), "name" => "Construction"],
            ["id" => Str::uuid()->toString(), "name" => "Retail"],
            ["id" => Str::uuid()->toString(), "name" => "Education Management"],
            ["id" => Str::uuid()->toString(), "name" => "Financial Services"],
            ["id" => Str::uuid()->toString(), "name" => "Accounting"],
            ["id" => Str::uuid()->toString(), "name" => "Computer Software"],
            ["id" => Str::uuid()->toString(), "name" => "Higher Education"],
            ["id" => Str::uuid()->toString(), "name" => "Automotive"],
            ["id" => Str::uuid()->toString(), "name" => "Government Administration"],
            ["id" => Str::uuid()->toString(), "name" => "Marketing & Advertising"],
            ["id" => Str::uuid()->toString(), "name" => "Banking"],
            ["id" => Str::uuid()->toString(), "name" => "Health, Welness & Fitness"],
            ["id" => Str::uuid()->toString(), "name" => "Real Estate"],
            ["id" => Str::uuid()->toString(), "name" => "Food & Beverages"],
            ["id" => Str::uuid()->toString(), "name" => "Telecommunications"],
            ["id" => Str::uuid()->toString(), "name" => "Oil & Energy"],
            ["id" => Str::uuid()->toString(), "name" => "Hospitality"],
            ["id" => Str::uuid()->toString(), "name" => "Mechanical or Industrial Engineering"],
            ["id" => Str::uuid()->toString(), "name" => "Primary/Secondary Education"],
            ["id" => Str::uuid()->toString(), "name" => "Internet"],
            ["id" => Str::uuid()->toString(), "name" => "Electrical/Electronic Manufacturing"],
            ["id" => Str::uuid()->toString(), "name" => "Insurance"],
            ["id" => Str::uuid()->toString(), "name" => "Medical Practice"],
            ["id" => Str::uuid()->toString(), "name" => "Human Resources"],
            ["id" => Str::uuid()->toString(), "name" => "Consumer Services"],
            ["id" => Str::uuid()->toString(), "name" => "Transportation/Trucking/Railroad"],
            ["id" => Str::uuid()->toString(), "name" => "Pharmaceuticals"],
            ["id" => Str::uuid()->toString(), "name" => "Restaurants"],
            ["id" => Str::uuid()->toString(), "name" => "Management Consulting"],
            ["id" => Str::uuid()->toString(), "name" => "Civil Engineering"],
            ["id" => Str::uuid()->toString(), "name" => "Research"],
            ["id" => Str::uuid()->toString(), "name" => "Design"],
            ["id" => Str::uuid()->toString(), "name" => "Logistics & Supply Chain"],
            ["id" => Str::uuid()->toString(), "name" => "Law Practice"],
            ["id" => Str::uuid()->toString(), "name" => "Architecture & Planning"],
            ["id" => Str::uuid()->toString(), "name" => "Apparel & Fashion"],
            ["id" => Str::uuid()->toString(), "name" => "Consumer Goods"],
            ["id" => Str::uuid()->toString(), "name" => "Facilities Services"],
            ["id" => Str::uuid()->toString(), "name" => "Food Production"],
            ["id" => Str::uuid()->toString(), "name" => "Non-Profit Organization Management"],
            ["id" => Str::uuid()->toString(), "name" => "Machinery"],
            ["id" => Str::uuid()->toString(), "name" => "Entertainment"],
            ["id" => Str::uuid()->toString(), "name" => "Chemicals"],
            ["id" => Str::uuid()->toString(), "name" => "Wholesale"],
            ["id" => Str::uuid()->toString(), "name" => "Arts & Crafts"],
            ["id" => Str::uuid()->toString(), "name" => "Utilities"],
            ["id" => Str::uuid()->toString(), "name" => "Farming"],
            ["id" => Str::uuid()->toString(), "name" => "Legal Services"],
            ["id" => Str::uuid()->toString(), "name" => "Mining & Metals"],
            ["id" => Str::uuid()->toString(), "name" => "Airlines/Aviation"],
            ["id" => Str::uuid()->toString(), "name" => "Leisure, Travel & Tourism"],
            ["id" => Str::uuid()->toString(), "name" => "Sports"],
            ["id" => Str::uuid()->toString(), "name" => "Building Materials"],
            ["id" => Str::uuid()->toString(), "name" => "Environmental Services"],
            ["id" => Str::uuid()->toString(), "name" => "Professional Training & Coaching"],
            ["id" => Str::uuid()->toString(), "name" => "Medical Devices"],
            ["id" => Str::uuid()->toString(), "name" => "Music"],
            ["id" => Str::uuid()->toString(), "name" => "Individual & Family Services"],
            ["id" => Str::uuid()->toString(), "name" => "Cosmetics"],
            ["id" => Str::uuid()->toString(), "name" => "Mental Health Care"],
            ["id" => Str::uuid()->toString(), "name" => "Industrial Automation"],
            ["id" => Str::uuid()->toString(), "name" => "Security & Investigations"],
            ["id" => Str::uuid()->toString(), "name" => "Staffing & Recruiting"],
            ["id" => Str::uuid()->toString(), "name" => "Aviation & Aerospace"],
            ["id" => Str::uuid()->toString(), "name" => "Graphic Design"],
            ["id" => Str::uuid()->toString(), "name" => "Biotechnology"],
            ["id" => Str::uuid()->toString(), "name" => "Textiles"],
            ["id" => Str::uuid()->toString(), "name" => "Import and Export"],
            ["id" => Str::uuid()->toString(), "name" => "Consumer Electronics"],
            ["id" => Str::uuid()->toString(), "name" => "Public Relations and Communications"],
            ["id" => Str::uuid()->toString(), "name" => "Broadcast Media"],
            ["id" => Str::uuid()->toString(), "name" => "Business Supplies & Equipment"],
            ["id" => Str::uuid()->toString(), "name" => "Writing & Editing"],
            ["id" => Str::uuid()->toString(), "name" => "Military"],
            ["id" => Str::uuid()->toString(), "name" => "Media Production"],
            ["id" => Str::uuid()->toString(), "name" => "Computer Networking"],
            ["id" => Str::uuid()->toString(), "name" => "International Trade and Development"],
            ["id" => Str::uuid()->toString(), "name" => "Renewables & Environment"],
            ["id" => Str::uuid()->toString(), "name" => "Events Services"],
            ["id" => Str::uuid()->toString(), "name" => "Civic & Social Organization"],
            ["id" => Str::uuid()->toString(), "name" => "Photography"],
            ["id" => Str::uuid()->toString(), "name" => "Computer Hardware"],
            ["id" => Str::uuid()->toString(), "name" => "Defense & Space"],
            ["id" => Str::uuid()->toString(), "name" => "Furniture"],
            ["id" => Str::uuid()->toString(), "name" => "Computer & Network Security"],
            ["id" => Str::uuid()->toString(), "name" => "Printing"],
            ["id" => Str::uuid()->toString(), "name" => "Fine Art"],
            ["id" => Str::uuid()->toString(), "name" => "Investment Management"],
            ["id" => Str::uuid()->toString(), "name" => "E-Learning"],
            ["id" => Str::uuid()->toString(), "name" => "Outsourcing/Offshoring"],
            ["id" => Str::uuid()->toString(), "name" => "Warehousing"],
            ["id" => Str::uuid()->toString(), "name" => "Law Enforcement"],
            ["id" => Str::uuid()->toString(), "name" => "Publishing"],
            ["id" => Str::uuid()->toString(), "name" => "Religious Institutions"],
            ["id" => Str::uuid()->toString(), "name" => "Maritime"],
            ["id" => Str::uuid()->toString(), "name" => "Information Services"],
            ["id" => Str::uuid()->toString(), "name" => "Supermarkets"],
            ["id" => Str::uuid()->toString(), "name" => "Executive Office"],
            ["id" => Str::uuid()->toString(), "name" => "Animation"],
            ["id" => Str::uuid()->toString(), "name" => "Government Relations"],
            ["id" => Str::uuid()->toString(), "name" => "Semiconductors"],
            ["id" => Str::uuid()->toString(), "name" => "Program Development"],
            ["id" => Str::uuid()->toString(), "name" => "Plastics"],
            ["id" => Str::uuid()->toString(), "name" => "Online Media"],
            ["id" => Str::uuid()->toString(), "name" => "Public Safety"],
            ["id" => Str::uuid()->toString(), "name" => "Packaging and Containers"],
            ["id" => Str::uuid()->toString(), "name" => "Judiciary"],
            ["id" => Str::uuid()->toString(), "name" => "Alternative Medicine"],
            ["id" => Str::uuid()->toString(), "name" => "Performing Arts"],
            ["id" => Str::uuid()->toString(), "name" => "Commercial Real Estate"],
            ["id" => Str::uuid()->toString(), "name" => "Motion Pictures & Film"],
            ["id" => Str::uuid()->toString(), "name" => "Veterinary"],
            ["id" => Str::uuid()->toString(), "name" => "Computer Games"],
            ["id" => Str::uuid()->toString(), "name" => "Luxury Goods & Jewelry"],
            ["id" => Str::uuid()->toString(), "name" => "International Affairs"],
            ["id" => Str::uuid()->toString(), "name" => "Investment Banking"],
            ["id" => Str::uuid()->toString(), "name" => "Market Research"],
            ["id" => Str::uuid()->toString(), "name" => "Wine & Spirits"],
            ["id" => Str::uuid()->toString(), "name" => "Package/Freight Delivery"],
            ["id" => Str::uuid()->toString(), "name" => "Newspapers"],
            ["id" => Str::uuid()->toString(), "name" => "Translation & Localization"],
            ["id" => Str::uuid()->toString(), "name" => "Recreational Facilities & Services"],
            ["id" => Str::uuid()->toString(), "name" => "Sporting Goods"],
            ["id" => Str::uuid()->toString(), "name" => "Public Policy"],
            ["id" => Str::uuid()->toString(), "name" => "Capital Markets"],
            ["id" => Str::uuid()->toString(), "name" => "Paper & Forest Products"],
            ["id" => Str::uuid()->toString(), "name" => "Libraries"],
            ["id" => Str::uuid()->toString(), "name" => "Wireless"],
            ["id" => Str::uuid()->toString(), "name" => "Venture Capital & Private Equity"],
            ["id" => Str::uuid()->toString(), "name" => "Gambling & Casinos"],
            ["id" => Str::uuid()->toString(), "name" => "Ranching"],
            ["id" => Str::uuid()->toString(), "name" => "Glass, Ceramics & Concrete"],
            ["id" => Str::uuid()->toString(), "name" => "Philanthropy"],
            ["id" => Str::uuid()->toString(), "name" => "Dairy"],
            ["id" => Str::uuid()->toString(), "name" => "Museums and Institutions"],
            ["id" => Str::uuid()->toString(), "name" => "Shipbuilding"],
            ["id" => Str::uuid()->toString(), "name" => "Think Tanks"],
            ["id" => Str::uuid()->toString(), "name" => "Political Organization"],
            ["id" => Str::uuid()->toString(), "name" => "Fishery"],
            ["id" => Str::uuid()->toString(), "name" => "Fund-Raising"],
            ["id" => Str::uuid()->toString(), "name" => "Tobacco"],
            ["id" => Str::uuid()->toString(), "name" => "Railroad Manufacture"],
            ["id" => Str::uuid()->toString(), "name" => "Alternative Dispute Resolution"],
            ["id" => Str::uuid()->toString(), "name" => "Nanotechnology"],
            ["id" => Str::uuid()->toString(), "name" => "Legislative Office"],
            ["id" => Str::uuid()->toString(), "name" => "Mobile Games"]
        ];
        DB::table('organization_industries')->insert($industries);

        $orgid = Str::uuid()->toString();
        $orgs = [
            [
                "id" => $orgid,
                'name' => 'PT Perintis Semesta Digital',
                'description' => '',
                'url' => 'https://startapp.id',
                'industry_id' => $indITid,
                'organization_size' => '0-1',
                'organization_type' => 'Self Owned',
                'year_founded' => '2015',
            ]
        ];
        DB::table('organizations')->insert($orgs);

        $bodid = Str::uuid()->toString();
        $structures = [
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Owner"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Commissioner"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Director"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Manager"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Supervisor"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Specialist"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Consultant"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Lead"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "level",
                "name" => "Staff"
            ],

            // DEPARTMENTS
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Board of Commissioners"
            ],
            [
                "id" => $bodid,
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Board of Directors"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Human Resource"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Marketing"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Customer Service Support"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Sales"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Accounting and Finance"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Research and Development"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "IT Digital"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Production"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Operation"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "IT Support"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Purchasing"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "department",
                "name" => "Legal"
            ],

            // DIVISIONS
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => $bodid,
                "type" => "position",
                "name" => "CEO (Chief Executive Office)"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => $bodid,
                "type" => "position",
                "name" => "COO (Chief Operation Office)"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => $bodid,
                "type" => "position",
                "name" => "CFO (Chief Finance Office)"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => $bodid,
                "type" => "position",
                "name" => "CMO (Chief Marketing Office)"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "position",
                "name" => "Human Resource Development"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "position",
                "name" => "Talent Acquisition"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "position",
                "name" => "IT Software Engineer"
            ],
            [
                "id" => Str::uuid()->toString(),
                "organization_id" => $orgid,
                "structure_id" => null,
                "type" => "position",
                "name" => "Staff"
            ],
        ];

        DB::table('organization_structures')->insert($structures);
    }
}
